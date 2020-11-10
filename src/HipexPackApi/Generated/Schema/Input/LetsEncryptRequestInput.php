<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Trigger Letsencrypt request by domainname.
 * @codeCoverageIgnore
 */
class LetsEncryptRequestInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * domain
	 *
	 * @var int|null
	 */
	private $domain;

	/**
	 * domainPointer
	 *
	 * @var int|null
	 */
	private $domainPointer;


	/**
	 * domain
	 *
	 * @return int|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}


	/**
	 * domain
	 *
	 * @param int|null $domain
	 * @return $this
	 */
	public function setDomain($domain = null): self
	{
		$this->domain = $domain === null ? null : (int) $domain;
		return $this;
	}


	/**
	 * domainPointer
	 *
	 * @return int|null
	 */
	public function getDomainPointer()
	{
		return $this->domainPointer;
	}


	/**
	 * domainPointer
	 *
	 * @param int|null $domainPointer
	 * @return $this
	 */
	public function setDomainPointer($domainPointer = null): self
	{
		$this->domainPointer = $domainPointer === null ? null : (int) $domainPointer;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->domainPointer !== null) $result['domainPointer'] = $this->domainPointer;
		return $result;
	}
}
