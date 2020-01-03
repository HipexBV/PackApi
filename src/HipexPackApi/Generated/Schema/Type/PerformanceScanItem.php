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
 * Performance scan item entity.
 * @codeCoverageIgnore
 */
class PerformanceScanItem extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * value
	 *
	 * @var string|null
	 */
	private $value;

	/**
	 * generalDescription
	 *
	 * @var string|null
	 */
	private $generalDescription;

	/**
	 * scanDescription
	 *
	 * @var string|null
	 */
	private $scanDescription;


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
	 * value
	 *
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * value
	 *
	 * @param string|null $value
	 * @return $this
	 */
	public function setValue($value = null): self
	{
		$this->value = $value === null ? null : (string) $value;
		return $this;
	}


	/**
	 * generalDescription
	 *
	 * @return string|null
	 */
	public function getGeneralDescription()
	{
		return $this->generalDescription;
	}


	/**
	 * generalDescription
	 *
	 * @param string|null $generalDescription
	 * @return $this
	 */
	public function setGeneralDescription($generalDescription = null): self
	{
		$this->generalDescription = $generalDescription === null ? null : (string) $generalDescription;
		return $this;
	}


	/**
	 * scanDescription
	 *
	 * @return string|null
	 */
	public function getScanDescription()
	{
		return $this->scanDescription;
	}


	/**
	 * scanDescription
	 *
	 * @param string|null $scanDescription
	 * @return $this
	 */
	public function setScanDescription($scanDescription = null): self
	{
		$this->scanDescription = $scanDescription === null ? null : (string) $scanDescription;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->value !== null) $result['value'] = $this->value;
		if ($this->generalDescription !== null) $result['generalDescription'] = $this->generalDescription;
		if ($this->scanDescription !== null) $result['scanDescription'] = $this->scanDescription;
		return $result;
	}
}
