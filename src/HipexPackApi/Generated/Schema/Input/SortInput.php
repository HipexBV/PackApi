<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Sort field direction options are "asc" or "desc" by default "asc" is assumed"
 * @codeCoverageIgnore
 */
class SortInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * field
	 *
	 * @var string
	 */
	private $field;

	/**
	 * direction
	 *
	 * @var string|null
	 */
	private $direction;


	/**
	 * field
	 *
	 * @return string
	 */
	public function getField(): string
	{
		return $this->field;
	}


	/**
	 * field
	 *
	 * @param string $field
	 * @return $this
	 */
	public function setField($field): self
	{
		$this->field = $field;
		return $this;
	}


	/**
	 * direction
	 *
	 * @return string|null
	 */
	public function getDirection()
	{
		return $this->direction;
	}


	/**
	 * direction
	 *
	 * @param string|null $direction
	 * @return $this
	 */
	public function setDirection($direction = null): self
	{
		$this->direction = $direction;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->field !== null) $result['field'] = $this->field;
		if ($this->direction !== null) $result['direction'] = $this->direction;
		return $result;
	}
}
