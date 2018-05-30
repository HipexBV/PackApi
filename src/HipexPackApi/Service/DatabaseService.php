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
use HipexPackApi\Repository\DatabaseRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

class DatabaseService extends AbstractEntityService
{
    /**
     * @param LoggerInterface $log
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param DatabaseRepository $repository
     */
    public function __construct(LoggerInterface $log, ServerChangeService $changeService, Client $client, DatabaseRepository $repository)
    {
        parent::__construct($log, $changeService, $client, $repository);
    }

    /**
     * Check if database exists and if not create.
     *
     * @param Input\DatabaseInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\Database
     */
    public function ensure(Input\DatabaseInput $input, bool $waitForServer = false, int $timeout = 600): Type\Database
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runEnsure($input, $waitForServer, $timeout);
    }

    /**
     * @param Input\DatabaseInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\Database
     */
    public function mutate(Input\DatabaseInput $input, bool $waitForServer = false, int $timeout = 600): Type\Database
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runMutate($input, $waitForServer, $timeout);
    }

    /**
     * {@inheritdoc}
     * @param Input\DatabaseInput $input
     */
    protected function createFilter(BaseType $input): Input\FilterInput
    {
        $filter = new Input\FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new Input\FilterInput)->setField('domain.id')->setValue($input->getDomain()),
            (new Input\FilterInput)->setField('database')->setValue($input->getDatabase()),
        ]);
        return $filter;
    }

    /**
     * {@inheritdoc}
     */
    protected function createMutation(): BaseQuery
    {
        return new Mutation\Database();
    }
}