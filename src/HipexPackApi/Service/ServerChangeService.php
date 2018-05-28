<?php
/**
 * @author Robert Fokken <rfokken@emico.nl>
 * @copyright (c) Emico B.V. 2018
 */

namespace HipexPackApi\Service;

use HipexPackApi\Exception\TimeoutException;
use HipexPackApi\Repository\ServerChangeRepository;
use HipexPackApi\Schema\BaseType;

class ServerChangeService
{
    /**
     * @var ServerChangeRepository
     */
    private $repository;

    /**
     * Checklist constructor.
     *
     * @param ServerChangeRepository $repository
     */
    public function __construct(ServerChangeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param BaseType $type
     * @return bool
     */
    public function isServerUpdateFinished(BaseType $type): bool
    {
        $change = $this->repository->findLastByEntity($type);
        return (bool) $change->getFinished();
    }

    /**
     * Wait for server update of entity is finished. Suggested minimal timeout is 300 seconds
     *
     * @param BaseType $type
     * @param int $timeout
     */
    public function waitForServerUpdate(BaseType $type, int $timeout = 600): void
    {
        $start = time();
        while ($this->isServerUpdateFinished($type)) {
            if (time() - $start > $timeout) {
                throw new TimeoutException(sprintf('Waiting for server update of %s timed out', \get_class($type)));
            }
            sleep(1);
        }
    }
}