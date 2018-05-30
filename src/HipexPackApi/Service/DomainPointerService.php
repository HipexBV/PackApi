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
use HipexPackApi\Repository\DomainPointerRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

class DomainPointerService extends AbstractEntityService
{
    /**
     * @param LoggerInterface $log
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param DomainPointerRepository $repository
     */
    public function __construct(LoggerInterface $log, ServerChangeService $changeService, Client $client, DomainPointerRepository $repository)
    {
        parent::__construct($log, $changeService, $client, $repository);
    }

    /**
     * Check if domainPointer exists and if not create.
     *
     * @param Input\DomainPointerInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\DomainPointer
     */
    public function ensure(Input\DomainPointerInput $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): Type\DomainPointer
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runEnsure($input, $waitForServer, $timeout);
    }

    /**
     * @param Input\DomainPointerInput $input
     * @param bool $waitForServer
     * @param int $timeout
     * @return Type\DomainPointer
     */
    public function mutate(Input\DomainPointerInput $input, bool $waitForServer = false, int $timeout = ServerChangeService::DEFAULT_UPDATE_TIMEOUT): Type\DomainPointer
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runMutate($input, $waitForServer, $timeout);
    }

    /**
     * {@inheritdoc}
     * @param Input\DomainPointerInput $input
     */
    protected function createFilter(BaseType $input): Input\FilterInput
    {
        $filter = new Input\FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new Input\FilterInput)->setField('domain.id')->setValue($input->getDomain()),
            (new Input\FilterInput)->setField('pointer')->setValue($input->getPointer()),
        ]);
        return $filter;
    }

    /**
     * {@inheritdoc}
     */
    protected function createMutation(): BaseQuery
    {
        return new Mutation\DomainPointer();
    }
}