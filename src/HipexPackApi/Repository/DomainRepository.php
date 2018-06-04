<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Repository;

use HipexPackApi\Exception\EntityNotFoundException;
use HipexPackApi\Exception\ResultNonUniqueException;
use HipexPackApi\Generated\Schema\Input\FilterInput;
use HipexPackApi\Generated\Schema\Type;
use HipexPackApi\Generated\Schema\Query;
use HipexPackApi\Schema\BaseQuery;

class DomainRepository extends AbstractRepository
{
    /**
     * @param string $domainName
     * @param string|null $server
     * @return Type\Domain
     */
    public function findByDomainName(string $domainName, string $server = null): Type\Domain
    {
        if ($server === null) {
            /** @noinspection PhpIncompatibleReturnTypeInspection */
            return $this->findOneByField('domain', $domainName);
        }

        $filter = new FilterInput();
        $filter->setOperator('$and');
        $filter->setChildren([
            (new FilterInput)->setField('domain')->setValue($domainName),
            (new FilterInput)->setField('host.name')->setValue($server),
        ]);
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOne($filter);
    }

    /**
     * Create search query object
     *
     * @return BaseQuery
     */
    protected function createQuery(): BaseQuery
    {
        return new Query\Domain();
    }
}