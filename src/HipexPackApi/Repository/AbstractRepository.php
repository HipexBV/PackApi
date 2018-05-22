<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Client;
use HipexPackApi\Exception\EntityNotFoundException;
use HipexPackApi\Exception\ResultNonUniqueException;
use HipexPackApi\Generated\Schema\Input\FilterInput;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;

abstract class AbstractRepository
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Checklist constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param FilterInput $filter
     * @return BaseType
     * @throws EntityNotFoundException
     * @throws ResultNonUniqueException
     */
    public function findOne(FilterInput $filter): BaseType
    {
        $result = $this->client->query($this->createQuery(), ['filter' => $filter, 'limit' => null, 'skip' => null, 'sort' => null]);
        if (empty($result)) {
            throw new EntityNotFoundException(sprintf('No entities found for %s', json_encode($filter)));
        }

        if (\count($result) > 1) {
            throw new ResultNonUniqueException(sprintf('More then 1 entity found for %s', json_encode($filter)));
        }

        return current($result);
    }

    /**
     * @param FilterInput $filterInput
     * @return BaseType|null
     * @throws ResultNonUniqueException
     */
    public function findOneOrNull(FilterInput $filterInput): ?BaseType
    {
        try {
            return $this->findOne($filterInput);
        } catch (EntityNotFoundException $e) {
            return null;
        }
    }

    /**
     * @param string $field
     * @param $value
     * @return BaseType
     * @throws ResultNonUniqueException
     * @throws EntityNotFoundException
     */
    public function findOneByField(string $field, $value): BaseType
    {
        $filter = new FilterInput();
        $filter->setField($field);
        $filter->setOperator('$eq');
        $filter->setValue($value);

        return $this->findOne($filter);
    }

    /**
     * @param string $field
     * @param $value
     * @return BaseType
     * @throws ResultNonUniqueException
     */
    public function findOneOrNullByField(string $field, $value): BaseType
    {
        try {
            return $this->findOneByField($field, $value);
        } catch (EntityNotFoundException $e) {
            return null;
        }
    }

    /**
     * Create search query object
     *
     * @return BaseQuery
     */
    abstract protected function createQuery(): BaseQuery;
}