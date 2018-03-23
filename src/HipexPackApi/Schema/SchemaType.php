<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Schema;

class SchemaType extends BaseType
{
    /**
     * @var array|null
     */
    private $directives;

    /**
     * @var array|null
     */
    private $mutationType;

    /**
     * @var array|null
     */
    private $queryType;

    /**
     * @var array|null
     */
    private $subscriptionType;

    /**
     * @var array|null
     */
    private $types;

    /**
     * @return array
     */
    public function getDirectives()
    {
        return $this->directives;
    }

    /**
     * @param array $directives
     */
    public function setDirectives(array $directives = null)
    {
        $this->directives = $directives;
    }

    /**
     * @return array
     */
    public function getMutationType()
    {
        return $this->mutationType;
    }

    /**
     * @param array $mutationType
     */
    public function setMutationType(array $mutationType = null)
    {
        $this->mutationType = $mutationType;
    }

    /**
     * @return array
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * @param array $queryType
     */
    public function setQueryType(array $queryType = null)
    {
        $this->queryType = $queryType;
    }

    /**
     * @return array
     */
    public function getSubscriptionType()
    {
        return $this->subscriptionType;
    }

    /**
     * @param array $subscriptionType
     */
    public function setSubscriptionType(array $subscriptionType = null)
    {
        $this->subscriptionType = $subscriptionType;
    }

    /**
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param array $types
     */
    public function setTypes(array $types = null)
    {
        $this->types = $types;
    }
}