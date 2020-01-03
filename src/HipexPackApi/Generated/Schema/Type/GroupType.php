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
 * Group in checklist.
 * @codeCoverageIgnore
 */
class GroupType extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * title
	 *
	 * @var string|null
	 */
	private $title;

	/**
	 * checks
	 *
	 * @var CheckType[]|null
	 */
	private $checks;


	/**
	 * title
	 *
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * title
	 *
	 * @param string|null $title
	 * @return $this
	 */
	public function setTitle($title = null): self
	{
		$this->title = $title === null ? null : (string) $title;
		return $this;
	}


	/**
	 * checks
	 *
	 * @return CheckType[]|null
	 */
	public function getChecks()
	{
		return $this->checks;
	}


	/**
	 * checks
	 *
	 * @param CheckType[]|null $checks
	 * @return $this
	 */
	public function setChecks($checks = null): self
	{
		$this->checks = [];
		if ($checks === null) return $this;
		foreach ($checks as $item) {
		    $this->addChecksValue($item);
		}
		return $this;
	}


	private function addChecksValue($checks)
	{
		if ($checks !== null && !$checks instanceof \HipexPackApi\Generated\Schema\Type\CheckType) {
		    $checks = new \HipexPackApi\Generated\Schema\Type\CheckType($checks);
		}
		$this->checks[] = $checks;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->title !== null) $result['title'] = $this->title;
		if ($this->checks !== null) $result['checks'] = $this->checks;
		return $result;
	}
}
