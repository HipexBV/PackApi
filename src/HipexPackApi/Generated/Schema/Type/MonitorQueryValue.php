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
 * QueryValue
 * @codeCoverageIgnore
 */
class MonitorQueryValue extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * date
	 *
	 * @var string
	 */
	private $date;

	/**
	 * values
	 *
	 * @var KeyValue[]|null
	 */
	private $values;


	/**
	 * date
	 *
	 * @return string
	 */
	public function getDate(): string
	{
		return $this->date;
	}


	/**
	 * date
	 *
	 * @param string $date
	 * @return $this
	 */
	public function setDate($date): self
	{
		$this->date = $date;
		return $this;
	}


	/**
	 * values
	 *
	 * @return KeyValue[]|null
	 */
	public function getValues()
	{
		return $this->values;
	}


	/**
	 * values
	 *
	 * @param KeyValue[]|null $values
	 * @return $this
	 */
	public function setValues($values = null): self
	{
		$this->values = [];
		if ($values === null) return $this;
		foreach ($values as $item) {
		    $this->addValuesValue($item);
		}
		return $this;
	}


	private function addValuesValue($values)
	{
		if ($values !== null && !$values instanceof \HipexPackApi\Generated\Schema\Type\KeyValue) {
		    $values = new \HipexPackApi\Generated\Schema\Type\KeyValue($values);
		}
		$this->values[] = $values;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->date !== null) $result['date'] = $this->date;
		if ($this->values !== null) $result['values'] = $this->values;
		return $result;
	}
}
