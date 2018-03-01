<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use HipexPackApi\Generated\Schema\Type\SortDirectionEnum;
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
	 * @var SortDirectionEnum|null
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
	 * @return SortDirectionEnum|null
	 */
	public function getDirection()
	{
		return $this->direction;
	}


	/**
	 * direction
	 *
	 * @param SortDirectionEnum|null $direction
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
		return [
		    'field' => $this->field,
		    'direction' => $this->direction,
		];
	}
}
