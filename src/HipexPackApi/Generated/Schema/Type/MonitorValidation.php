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
 * Validation for, uptime monitoring of your domain.
 * @codeCoverageIgnore
 */
class MonitorValidation extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * domainName
	 *
	 * @var string
	 */
	private $domainName;

	/**
	 * successful
	 *
	 * @var bool|null
	 */
	private $successful;

	/**
	 * result
	 *
	 * @var ValidationStep[]|null
	 */
	private $result;


	/**
	 * domainName
	 *
	 * @return string
	 */
	public function getDomainName(): string
	{
		return $this->domainName;
	}


	/**
	 * domainName
	 *
	 * @param string $domainName
	 * @return $this
	 */
	public function setDomainName($domainName): self
	{
		$this->domainName = $domainName;
		return $this;
	}


	/**
	 * successful
	 *
	 * @return bool|null
	 */
	public function getSuccessful()
	{
		return $this->successful;
	}


	/**
	 * successful
	 *
	 * @param bool|null $successful
	 * @return $this
	 */
	public function setSuccessful($successful = null): self
	{
		$this->successful = $successful === null ? null : (bool) $successful;
		return $this;
	}


	/**
	 * result
	 *
	 * @return ValidationStep[]|null
	 */
	public function getResult()
	{
		return $this->result;
	}


	/**
	 * result
	 *
	 * @param ValidationStep[]|null $result
	 * @return $this
	 */
	public function setResult($result = null): self
	{
		$this->result = [];
		if ($result === null) return $this;
		foreach ($result as $item) {
		    $this->addResultValue($item);
		}
		return $this;
	}


	private function addResultValue($result)
	{
		if ($result !== null && !$result instanceof \HipexPackApi\Generated\Schema\Type\ValidationStep) {
		    $result = new \HipexPackApi\Generated\Schema\Type\ValidationStep($result);
		}
		$this->result[] = $result;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->domainName !== null) $result['domainName'] = $this->domainName;
		if ($this->successful !== null) $result['successful'] = $this->successful;
		if ($this->result !== null) $result['result'] = $this->result;
		return $result;
	}
}
