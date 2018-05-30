<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Exception\EntityNotFoundException;
use HipexPackApi\Exception\ResultNonUniqueException;
use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Generated\Schema\Query;
use HipexPackApi\Schema\BaseQuery;

class DomainPointerRepository extends AbstractRepository
{
    /**
     * @param string $pointer
     * @return Type\DomainPointer
     * @throws ResultNonUniqueException
     * @throws EntityNotFoundException
     */
    public function findByPointer(string $pointer): Type\DomainPointer
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOneByField('pointer', $pointer);
    }

    /**
     * {@inheritdoc}
     */
    protected function createQuery(): BaseQuery
    {
        return new Query\DomainPointer();
    }
}