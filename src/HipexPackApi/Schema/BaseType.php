<?php
/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 */

namespace HipexPackApi\Schema;


use HipexPackApi\Exception\InvalidArgumentException;

abstract class BaseType
{
    /**
     * @var string[]
     */
    private static $setterCache = [];

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        foreach ($data as $key => $value) {
            $this->addData($key, $value);
        }
        return $this;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return $this
     */
    public function addData(string $key, $value)
    {
        $method = self::getSetter($key);
        if (!method_exists($this, $method)) {
            throw new InvalidArgumentException(sprintf('Could not find setter method %s::%s()', \get_class($this), $method));
        }

        $this->$method($value);
        return $this;
    }

    /**
     * @param string $key
     * @return string|null
     */
    private static function getSetter(string $key)
    {
        if (!isset(self::$setterCache[$key])) {
            self::$setterCache[$key] = 'set' . ucfirst($key);
        }
        return self::$setterCache[$key];
    }
}