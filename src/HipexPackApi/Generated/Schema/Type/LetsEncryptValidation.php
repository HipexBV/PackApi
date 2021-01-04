<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * LetsEncrypt validation steps.
 * @codeCoverageIgnore
 */
class LetsEncryptValidation extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * steps
	 *
	 * @var LetsEncryptValidationStep[]|null
	 */
	private $steps;


	/**
	 * steps
	 *
	 * @return LetsEncryptValidationStep[]|null
	 */
	public function getSteps()
	{
		return $this->steps;
	}


	/**
	 * steps
	 *
	 * @param LetsEncryptValidationStep[]|null $steps
	 * @return $this
	 */
	public function setSteps($steps = null): self
	{
		$this->steps = [];
		if ($steps === null) return $this;
		foreach ($steps as $item) {
		    $this->addStepsValue($item);
		}
		return $this;
	}


	private function addStepsValue($steps)
	{
		if ($steps !== null && !$steps instanceof \HipexPackApi\Generated\Schema\Type\LetsEncryptValidationStep) {
		    $steps = new \HipexPackApi\Generated\Schema\Type\LetsEncryptValidationStep($steps);
		}
		$this->steps[] = $steps;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->steps !== null) $result['steps'] = $this->steps;
		return $result;
	}
}
