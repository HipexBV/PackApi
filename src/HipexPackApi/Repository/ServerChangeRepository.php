<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Exception\InvalidArgumentException;
use HipexPackApi\Generated\Schema\Input\FilterInput;
use HipexPackApi\Generated\Schema\Input\SortInput;
use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Generated\Schema\Query;
use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Schema\BaseType;

class ServerChangeRepository extends AbstractRepository
{
    /**
     * @param BaseType $type
     * @param SortInput $sort
     * @param int|null $limit
     * @param int|null $skip
     * @return Type\ServerChange[]|iterable
     */
    public function findByEntity(BaseType $type, SortInput $sort = null, int $limit = null, int $skip = null)
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->find($this->createTypeFilter($type), $sort, $limit, $skip);
    }

    /**
     * @param BaseType $type
     * @return Type\ServerChange
     */
    public function findLastByEntity(BaseType $type): Type\ServerChange
    {
        $sort = new SortInput();
        $sort->setField('createdAt');
        $sort->setDirection(Type\SortDirectionEnum::VALUE_DESC);
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOne($this->createTypeFilter($type), $sort, 1);
    }

    /**
     * Create search query object
     *
     * @return BaseQuery
     */
    protected function createQuery(): BaseQuery
    {
        return new Query\ServerChange();
    }

    /**
     * @param BaseType $type
     * @return FilterInput
     */
    private function createTypeFilter(BaseType $type): FilterInput
    {
        if (!method_exists($type, 'getId')) {
            throw new InvalidArgumentException(sprintf('Method %s::getId() does not exist', \get_class($type)));
        }

        if (!method_exists($type, 'getEntityTypeName')) {
            throw new InvalidArgumentException(sprintf('Method %s::getEntityTypeName() does not exist', \get_class($type)));
        }

        $filter = new FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new FilterInput)->setField('entityId')->setValue($type->getId()),
            (new FilterInput)->setField('entityType')->setValue($type->getEntityTypeName()()),
        ]);

        return $filter;
    }
}