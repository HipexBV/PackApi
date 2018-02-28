<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Schema;


abstract class BaseQuery
{
    /**
     * @return string
     */
    abstract public function getBody(): string;

    /**
     * @return BaseType
     */
    abstract public function getReturnType(): BaseType;

    /**
     * @return string
     */
    abstract public function getReturnKey(): string;
}