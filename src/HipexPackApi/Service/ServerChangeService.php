<?php
/**
 * @author Robert Fokken <rfokken@emico.nl>
 * @copyright (c) Emico B.V. 2018
 */

namespace HipexPackApi\Service;

use HipexPackApi\Exception\EntityNotFoundException;
use HipexPackApi\Exception\TimeoutException;
use HipexPackApi\Repository\ServerChangeRepository;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

class ServerChangeService
{
    /**
     * Default timeout for waiting on server updates
     */
    public const DEFAULT_UPDATE_TIMEOUT = 1200;

    /**
     * @var ServerChangeRepository
     */
    private $repository;

    /**
     * @var LoggerInterface
     */
    private $log;

    /**
     * Checklist constructor.
     *
     * @param ServerChangeRepository $repository
     * @param LoggerInterface $log
     */
    public function __construct(ServerChangeRepository $repository, LoggerInterface $log)
    {
        $this->repository = $repository;
        $this->log = $log;
    }

    /**
     * @param BaseType $type
     * @return bool
     */
    public function isServerUpdateFinished(BaseType $type): bool
    {
        try {
            $change = $this->repository->findLastByEntity($type);
            return (bool) $change->getFinished();
        } catch (EntityNotFoundException $e) {
            /** @noinspection PhpUndefinedMethodInspection */
            $this->log->debug(sprintf('[%s] Could not found change for entity %s (ID %s)', __CLASS__, \get_class($type), $type->getId()));
            return true;
        }
    }

    /**
     * Wait for server update of entity is finished. Suggested minimal timeout is 300 seconds
     *
     * @param BaseType $type
     * @param int $timeout
     */
    public function waitForServerUpdate(BaseType $type, int $timeout = self::DEFAULT_UPDATE_TIMEOUT): void
    {
        $start = time();
        while (!$this->isServerUpdateFinished($type)) {
            $timeElapsed = time() - $start;
            if ($timeElapsed > $timeout) {
                throw new TimeoutException(sprintf('Waiting for server update of %s timed out', \get_class($type)));
            }

            /** @noinspection PhpUndefinedMethodInspection */
            $this->log->debug(sprintf(
                '[%s] Waiting for server update of %s (%s), timeout %s/%s',
                __CLASS__,
                \get_class($type),
                $type->getId(),
                $timeElapsed,
                $timeout
            ));
            sleep(1);
        }
    }
}