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

abstract class AbstractEntityService
{
    /**
     * @var ServerChangeService
     */
    private $changeService;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var AbstractRepository
     */
    private $repository;

    /**
     * UserService constructor.
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param AbstractRepository $repository
     */
    public function __construct(ServerChangeService $changeService, Client $client, AbstractRepository $repository)
    {
        $this->changeService = $changeService;
        $this->client = $client;
        $this->repository = $repository;
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
    protected function runEnsure(BaseType $input, bool $waitForServer = false, int $timeout = 600): BaseType
    {
        $entity = $this->repository->findOneOrNull($this->createFilter($input));
        if (!$entity) {
            $entity = $this->create($input);
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
    protected function runCreate(BaseType $input, bool $waitForServer = false, int $timeout = 600): BaseType
    {
        $entity = $this->client->query($this->createMutation(), ['entity' => $input]);

        if ($waitForServer) {
            $this->changeService->waitForServerUpdate($entity, $timeout);
        }

        return $entity;
    }
}