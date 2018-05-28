<?php
/**
 * @author Hipex <info@hipex.io>
 * @copyright (c) Hipex B.V. 2018
 * @see https://www.hipex.io/
 */

namespace HipexPackApi\Exception\QueryError;

interface QueryErrorInterface
{
    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @return array
     */
    public function getData(): array;
}