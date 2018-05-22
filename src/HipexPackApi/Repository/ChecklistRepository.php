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

class ChecklistRepository extends AbstractRepository
{
    /**
     * @param int $checklistId
     * @return Type\Checklist
     * @throws ResultNonUniqueException
     * @throws EntityNotFoundException
     */
    public function findById(int $checklistId): Type\Checklist
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOneByField('id', $checklistId);
    }

    /**
     * Create search query object
     *
     * @return BaseQuery
     */
    protected function createQuery(): BaseQuery
    {
        return new Query\Checklist();
    }
}