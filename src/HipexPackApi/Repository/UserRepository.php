<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Schema\BaseQuery;
use HipexPackApi\Generated\Schema\Query;
use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Generated\Schema\Input;

class UserRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createQuery(): BaseQuery
    {
        return new Query\User();
    }

    /**
     * @param int $serverId
     * @param string $user
     * @return Type\User|null
     */
    public function findByName(int $serverId, string $user): ?Type\User
    {
        $filter = new Input\FilterInput();
        $filter->setChildren([
            (new Input\FilterInput)->setField('server.id')->setValue($serverId),
            (new Input\FilterInput)->setField('user')->setValue($user),
        ]);

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOneOrNull($filter);
    }
}