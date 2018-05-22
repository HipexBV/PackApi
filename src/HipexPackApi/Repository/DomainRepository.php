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

class DomainRepository extends AbstractRepository
{
    /**
     * @param string $domainName
     * @return Type\Domain
     * @throws ResultNonUniqueException
     * @throws EntityNotFoundException
     */
    public function findByDomainName(string $domainName): Type\Domain
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->findOneByField('domain', $domainName);
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