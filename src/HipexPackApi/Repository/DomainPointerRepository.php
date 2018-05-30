<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Generated\Schema\Query;
use HipexPackApi\Generated\Schema\Input;
use HipexPackApi\Schema\BaseQuery;

class DomainPointerRepository extends AbstractRepository
{
    /**
     * {@inheritdoc}
     */
    protected function createQuery(): BaseQuery
    {
        return new Query\DomainPointer();
    }

    /**
     * @param int $domainId
     * @param string $pointer
     * @return Type\DomainPointer|null
     */
    public function findByPointer(int $domainId, string $pointer): ?Type\DomainPointer
    {
        $filter = new Input\FilterInput();
        $filter->setChildren([
            (new Input\FilterInput)->setField('domain.id')->setValue($domainId),
            (new Input\FilterInput)->setField('pointer')->setValue($pointer),
        ]);

        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOneOrNull($filter);
    }
}