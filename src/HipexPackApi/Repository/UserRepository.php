<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Generated\Schema\Query\User as UserQuery;

class UserRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createQuery(): BaseQuery
    {
        return new UserQuery();
    }
}