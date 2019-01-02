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
 * Performance scan group entity.
 * @codeCoverageIgnore
 */
class PerformanceScanGroup extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * score
	 *
	 * @var float|null
	 */
	private $score;

	/**
	 * items
	 *
	 * @var PerformanceScanItem[]|null
	 */
	private $items;


	/**
	 * name
	 *
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * name
	 *
	 * @param string|null $name
	 * @return $this
	 */
	public function setName($name = null): self
	{
		$this->name = $name === null ? null : (string) $name;
		return $this;
	}


	/**
	 * score
	 *
	 * @return float|null
	 */
	public function getScore()
	{
		return $this->score;
	}


	/**
	 * score
	 *
	 * @param float|null $score
	 * @return $this
	 */
	public function setScore($score = null): self
	{
		$this->score = $score === null ? null : (float) $score;
		return $this;
	}


	/**
	 * items
	 *
	 * @return PerformanceScanItem[]|null
	 */
	public function getItems()
	{
		return $this->items;
	}


	/**
	 * items
	 *
	 * @param PerformanceScanItem[]|null $items
	 * @return $this
	 */
	public function setItems($items = null): self
	{
		$this->items = [];
		if ($items === null) return $this;
		foreach ($items as $item) {
		    $this->addItemsValue($item);
		}
		return $this;
	}


	private function addItemsValue($items)
	{
		if ($items !== null && !$items instanceof \HipexPackApi\Generated\Schema\Type\PerformanceScanItem) {
		    $items = new \HipexPackApi\Generated\Schema\Type\PerformanceScanItem($items);
		}
		$this->items[] = $items;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->score !== null) $result['score'] = $this->score;
		if ($this->items !== null) $result['items'] = $this->items;
		return $result;
	}
}
