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
use HipexPackApi\Repository\DomainRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;

class DomainService extends AbstractEntityService
{
    /**
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param DomainRepository $repository
     */
    public function __construct(ServerChangeService $changeService, Client $client, DomainRepository $repository)
    {
        parent::__construct($changeService, $client, $repository);
    }

    /**
     * Check if domain exists and if not create.
     *
     * @param Input\DomainInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\Domain
     */
    public function ensure(Input\DomainInput $input, bool $waitForServer = false, int $timeout = 600): Type\Domain
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runEnsure($input, $waitForServer, $timeout);
    }

    /**
     * @param Input\DomainInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\Domain
     */
    public function create(Input\DomainInput $input, bool $waitForServer = false, int $timeout = 600): Type\Domain
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runCreate($input, $waitForServer, $timeout);
    }

    /**
     * {@inheritdoc}
     * @param Input\DomainInput $input
     */
    protected function createFilter(BaseType $input): Input\FilterInput
    {
        $filter = new Input\FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new Input\FilterInput)->setField('server.id')->setValue($input->getHost()),
            (new Input\FilterInput)->setField('domain')->setValue($input->getDomain()),
        ]);
        return $filter;
    }

    /**
     * {@inheritdoc}
     */
    protected function createMutation(): BaseQuery
    {
        return new Mutation\Domain();
    }
}