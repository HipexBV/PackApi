<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. 2018
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Service;

use HipexPackApi\Client;
use HipexPackApi\Generated\Schema\Input;
use HipexPackApi\Generated\Schema\Mutation;
use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Repository\UserRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

class UserService extends AbstractEntityService
{
    /**
     * @param LoggerInterface $log
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param UserRepository $repository
     */
    public function __construct(LoggerInterface $log, ServerChangeService $changeService, Client $client, UserRepository $repository)
    {
        parent::__construct($log, $changeService, $client, $repository);
    }

    /**
     * Check if user exists and if not create.
     *
     * @param Input\UserInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\User
     */
    public function ensure(Input\UserInput $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): Type\User
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runEnsure($input, $waitForServer, $timeout);
    }

    /**
     * @param Input\UserInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\User
     */
    public function mutate(Input\UserInput $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): Type\User
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runMutate($input, $waitForServer, $timeout);
    }

    /**
     * {@inheritdoc}
     * @param Input\UserInput $input
     */
    protected function createFilter(BaseType $input): Input\FilterInput
    {
        $filter = new Input\FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new Input\FilterInput)->setField('host.id')->setValue($input->getServer()),
            (new Input\FilterInput)->setField('user')->setValue($input->getUser()),
        ]);
        return $filter;
    }

    /**
     * {@inheritdoc}
     */
    protected function createMutation(): BaseQuery
    {
        return new Mutation\User();
    }
}