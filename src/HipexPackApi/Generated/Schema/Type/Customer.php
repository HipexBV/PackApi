<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * Hipex customer entity, can have multiple server's domains etc.
 * @codeCoverageIgnore
 */
class Customer extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * name
	 *
	 * @var string
	 */
	private $name;


	/**
	 * id
	 *
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * name
	 *
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}


	/**
	 * name
	 *
	 * @param string $name
	 * @return $this
	 */
	public function setName($name): self
	{
		$this->name = $name;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->name !== null) $result['name'] = $this->name;
		return $result;
	}
}
