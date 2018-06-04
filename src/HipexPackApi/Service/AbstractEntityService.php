<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. 2018
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Service;

use HipexPackApi\Client;
use HipexPackApi\Generated\Schema\Input;
use HipexPackApi\Repository\AbstractRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

abstract class AbstractEntityService
{
    /**
     * @var ServerChangeService
     */
    protected $changeService;

    /**
     * @var AbstractRepository
     */
    protected $repository;

    /**
     * @var LoggerInterface
     */
    protected $log;

    /**
     * @var Client
     */
    private $client;

    /**
     * UserService constructor.
     *
     * @param LoggerInterface $log
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param AbstractRepository $repository
     */
    public function __construct(LoggerInterface $log, ServerChangeService $changeService, Client $client, AbstractRepository $repository)
    {
        $this->changeService = $changeService;
        $this->client = $client;
        $this->repository = $repository;
        $this->log = $log;
    }

    /**
     * @param int $id
     * @param bool $waitForServer
     * @param int $timeout
     * @return []
     */
    public function delete(int $id, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): array
    {
        $entity = $this->client->query($this->createMutation(), ['entity' => ['id' => $id], 'delete' => false]);
        $this->log->info(sprintf('Created / updated %s', $this->objectToString($entity)));

        if ($waitForServer) {
            $this->changeService->waitForServerUpdate($entity, $timeout);
        }

        return $entity;
    }

    /**
     * @param BaseType $input
     * @return Input\FilterInput
     */
    abstract protected function createFilter(BaseType $input): Input\FilterInput;

    /**
     * @return BaseQuery
     */
    abstract protected function createMutation(): BaseQuery;

    /**
     * Check if object exists and if not create.
     *
     * @param BaseType $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return BaseType
     */
    protected function runEnsure(BaseType $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): BaseType
    {
        $entity = $this->repository->findOneOrNull($this->createFilter($input));
        if (!$entity) {
            $entity = $this->runMutate($input);
        } else {
            $this->log->info(sprintf('Ensure found entity %s', $this->objectToString($entity)));
        }

        if ($waitForServer) {
            $this->changeService->waitForServerUpdate($entity, $timeout);
        }

        return $entity;
    }

    /**
     * @param BaseType $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return BaseType
     */
    protected function runMutate(BaseType $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): BaseType
    {
        $entity = $this->client->query($this->createMutation(), ['entity' => $input, 'delete' => false]);
        $this->log->info(sprintf('Created / updated %s', $this->objectToString($entity)));

        if ($waitForServer) {
            $this->changeService->waitForServerUpdate($entity, $timeout);
        }

        return $entity;
    }

    /**
     * @param BaseType $type
     * @return string
     */
    protected function objectToString(BaseType $type): string
    {
        $string = \get_class($type);
        if (method_exists($type, 'getId')) {
            $string .= sprintf(' (ID %s)', $type->getId());
        }
        return $string;
    }
}