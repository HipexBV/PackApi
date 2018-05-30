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
use HipexPackApi\Generated\Schema\Input\SortInput;
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
     * @param SortInput|null $sort
     * @param int|null $limit
     * @param int|null $skip
     * @return BaseType
     */
    public function findOne(FilterInput $filter, SortInput $sort = null, int $limit = null, int $skip = null): BaseType
    {
        $result = $this->find($filter, $sort, $limit, $skip);
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
    public function findOneOrNullByField(string $field, $value): ?BaseType
    {
        try {
            return $this->findOneByField($field, $value);
        } catch (EntityNotFoundException $e) {
            return null;
        }
    }

    /**
     * @param FilterInput $filter
     * @param SortInput|null $sort
     * @param int|null $limit
     * @param int|null $skip
     * @return BaseType[]|iterable
     */
    public function find(FilterInput $filter, SortInput $sort = null, int $limit = null, int $skip = null)
    {
        return (array) $this->client->query($this->createQuery(), ['filter' => $filter, 'limit' => $limit, 'skip' => $skip, 'sort' => $sort]);
    }

    /**
     * Create search query object
     *
     * @return BaseQuery
     */
    abstract protected function createQuery(): BaseQuery;
}