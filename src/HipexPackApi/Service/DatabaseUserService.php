<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. 2018
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Service;

use HipexPackApi\Client;
use HipexPackApi\Exception\InvalidArgumentException;
use HipexPackApi\Generated\Schema\Input;
use HipexPackApi\Generated\Schema\Mutation;
use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Repository\DatabaseUserRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

class DatabaseUserService extends AbstractEntityService
{
    /**
     * @param LoggerInterface $log
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param DatabaseUserRepository $repository
     */
    public function __construct(LoggerInterface $log, ServerChangeService $changeService, Client $client, DatabaseUserRepository $repository)
    {
        parent::__construct($log, $changeService, $client, $repository);
    }

    /**
     * Check if databaseUser exists and if not create.
     *
     * @param int $serverId
     * @param Input\DatabaseUserInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\DatabaseUser
     */
    public function ensure(int $serverId, Input\DatabaseUserInput $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): Type\DatabaseUser
    {
        $entity = $this->repository->findOneOrNull($this->createFilter($input, $serverId));
        if (!$entity) {
            $entity = $this->runMutate($input);
        } else {
            $this->log->info(sprintf('Ensure found entity %s', $this->objectToString($entity)));
        }

        if ($waitForServer) {
            $this->changeService->waitForServerUpdate($entity, $timeout);
        }

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $entity;
    }

    /**
     * @param Input\DatabaseUserInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\DatabaseUser
     */
    public function mutate(Input\DatabaseUserInput $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): Type\DatabaseUser
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runMutate($input, $waitForServer, $timeout);
    }

    /**
     * {@inheritdoc}
     * @param Input\DatabaseUserInput $input
     */
    protected function createFilter(BaseType $input, int $serverId = null): Input\FilterInput
    {
        if (!$serverId) {
            throw new InvalidArgumentException('Can not create DatabaseUser filter without server id');
        }
        $filter = new Input\FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new Input\FilterInput)->setField('host.id')->setValue($serverId),
            (new Input\FilterInput)->setField('username')->setValue($input->getUsername()),
        ]);
        return $filter;
    }

    /**
     * {@inheritdoc}
     */
    protected function createMutation(): BaseQuery
    {
        return new Mutation\DatabaseUser();
    }
}