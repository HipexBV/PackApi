<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * SSL Certificate on domain
 * @codeCoverageIgnore
 */
class SslCertificateInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * certificate
	 *
	 * @var string|null
	 */
	private $certificate;

	/**
	 * chain
	 *
	 * @var string|null
	 */
	private $chain;

	/**
	 * key
	 *
	 * @var string|null
	 */
	private $key;

	/**
	 * domains
	 *
	 * @var int[]|null
	 */
	private $domains;

	/**
	 * domainPointers
	 *
	 * @var int[]|null
	 */
	private $domainPointers;


	/**
	 * id
	 *
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param int|null $id
	 * @return $this
	 */
	public function setId($id = null): self
	{
		$this->id = $id === null ? null : (int) $id;
		return $this;
	}


	/**
	 * certificate
	 *
	 * @return string|null
	 */
	public function getCertificate()
	{
		return $this->certificate;
	}


	/**
	 * certificate
	 *
	 * @param string|null $certificate
	 * @return $this
	 */
	public function setCertificate($certificate = null): self
	{
		$this->certificate = $certificate === null ? null : (string) $certificate;
		return $this;
	}


	/**
	 * chain
	 *
	 * @return string|null
	 */
	public function getChain()
	{
		return $this->chain;
	}


	/**
	 * chain
	 *
	 * @param string|null $chain
	 * @return $this
	 */
	public function setChain($chain = null): self
	{
		$this->chain = $chain === null ? null : (string) $chain;
		return $this;
	}


	/**
	 * key
	 *
	 * @return string|null
	 */
	public function getKey()
	{
		return $this->key;
	}


	/**
	 * key
	 *
	 * @param string|null $key
	 * @return $this
	 */
	public function setKey($key = null): self
	{
		$this->key = $key === null ? null : (string) $key;
		return $this;
	}


	/**
	 * domains
	 *
	 * @return int[]|null
	 */
	public function getDomains()
	{
		return $this->domains;
	}


	/**
	 * domains
	 *
	 * @param int[]|null $domains
	 * @return $this
	 */
	public function setDomains($domains = null): self
	{
		$this->domains = [];
		if ($domains === null) return $this;
		foreach ($domains as $item) {
		    $this->addDomainsValue($item);
		}
		return $this;
	}


	private function addDomainsValue($domains)
	{
		$this->domains[] = $domains;
	}


	/**
	 * domainPointers
	 *
	 * @return int[]|null
	 */
	public function getDomainPointers()
	{
		return $this->domainPointers;
	}


	/**
	 * domainPointers
	 *
	 * @param int[]|null $domainPointers
	 * @return $this
	 */
	public function setDomainPointers($domainPointers = null): self
	{
		$this->domainPointers = [];
		if ($domainPointers === null) return $this;
		foreach ($domainPointers as $item) {
		    $this->addDomainPointersValue($item);
		}
		return $this;
	}


	private function addDomainPointersValue($domainPointers)
	{
		$this->domainPointers[] = $domainPointers;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->certificate !== null) $result['certificate'] = $this->certificate;
		if ($this->chain !== null) $result['chain'] = $this->chain;
		if ($this->key !== null) $result['key'] = $this->key;
		if ($this->domains !== null) $result['domains'] = $this->domains;
		if ($this->domainPointers !== null) $result['domainPointers'] = $this->domainPointers;
		return $result;
	}
}
