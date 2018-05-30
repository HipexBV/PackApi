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
use HipexPackApi\Repository\DomainRepository;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;
use Psr\Log\LoggerInterface;

class DomainService extends AbstractEntityService
{
    /**
     * @param LoggerInterface $log
     * @param ServerChangeService $changeService
     * @param Client $client
     * @param DomainRepository $repository
     */
    public function __construct(LoggerInterface $log, ServerChangeService $changeService, Client $client, DomainRepository $repository)
    {
        parent::__construct($log, $changeService, $client, $repository);
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
    public function mutate(Input\DomainInput $input, bool $waitForServer = false, int $timeout = 600): Type\Domain
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->runMutate($input, $waitForServer, $timeout);
    }

    /**
     * {@inheritdoc}
     * @param Input\DomainInput $input
     */
    protected function createFilter(BaseType $input): Input\FilterInput
    {
        $filterChildren = [
            (new Input\FilterInput)->setField('domain')->setValue($input->getDomain())
        ];

        if ($input->getUser()) {
            $filterChildren[] = (new Input\FilterInput)->setField('user.id')->setValue($input->getUser());
        } elseif ($input->getHost()) {
            $filterChildren[] = (new Input\FilterInput)->setField('host.id')->setValue($input->getHost());
        } else {
            throw new InvalidArgumentException('Can nog create search filter from input, no user or host provided.');
        }

        return (new Input\FilterInput)
            ->setOperator('$and')
            ->setChildren($filterChildren);
    }

    /**
     * {@inheritdoc}
     */
    protected function createMutation(): BaseQuery
    {
        return new Mutation\Domain();
    }
}