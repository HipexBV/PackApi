<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-19
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * Return type used for key value pairs.
 * @codeCoverageIgnore
 */
class KeyValue extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * key
	 *
	 * @var string
	 */
	private $key;

	/**
	 * value
	 *
	 * @var string
	 */
	private $value;


	/**
	 * key
	 *
	 * @return string
	 */
	public function getKey(): string
	{
		return $this->key;
	}


	/**
	 * key
	 *
	 * @param string $key
	 * @return $this
	 */
	public function setKey($key): self
	{
		$this->key = $key;
		return $this;
	}


	/**
	 * value
	 *
	 * @return string
	 */
	public function getValue(): string
	{
		return $this->value;
	}


	/**
	 * value
	 *
	 * @param string $value
	 * @return $this
	 */
	public function setValue($value): self
	{
		$this->value = $value;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->key !== null) $result['key'] = $this->key;
		if ($this->value !== null) $result['value'] = $this->value;
		return $result;
	}
}
