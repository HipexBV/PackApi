<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * SSL certificate.
 * @codeCoverageIgnore
 */
class SSLCertificate extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * connectedDomainPointers
	 *
	 * @var DomainPointer[]|null
	 */
	private $connectedDomainPointers;

	/**
	 * connectedDomains
	 *
	 * @var Domain[]|null
	 */
	private $connectedDomains;

	/**
	 * certificateError
	 *
	 * @var string|null
	 */
	private $certificateError;

	/**
	 * alternativeDomains
	 *
	 * @var string[]|null
	 */
	private $alternativeDomains;

	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * issuer
	 *
	 * @var string|null
	 */
	private $issuer;

	/**
	 * expires
	 *
	 * @var DateTime|null
	 */
	private $expires;

	/**
	 * domain
	 *
	 * @var string|null
	 */
	private $domain;

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
	 * connectedDomainPointers
	 *
	 * @return DomainPointer[]|null
	 */
	public function getConnectedDomainPointers()
	{
		return $this->connectedDomainPointers;
	}


	/**
	 * connectedDomainPointers
	 *
	 * @param DomainPointer[]|null $connectedDomainPointers
	 * @return $this
	 */
	public function setConnectedDomainPointers($connectedDomainPointers = null): self
	{
		$this->connectedDomainPointers = [];
		if ($connectedDomainPointers === null) return $this;
		foreach ($connectedDomainPointers as $item) {
		    $this->addConnectedDomainPointersValue($item);
		}
		return $this;
	}


	private function addConnectedDomainPointersValue($connectedDomainPointers)
	{
		if ($connectedDomainPointers !== null && !$connectedDomainPointers instanceof \HipexPackApi\Generated\Schema\Type\DomainPointer) {
		    $connectedDomainPointers = new \HipexPackApi\Generated\Schema\Type\DomainPointer($connectedDomainPointers);
		}
		$this->connectedDomainPointers[] = $connectedDomainPointers;
	}


	/**
	 * connectedDomains
	 *
	 * @return Domain[]|null
	 */
	public function getConnectedDomains()
	{
		return $this->connectedDomains;
	}


	/**
	 * connectedDomains
	 *
	 * @param Domain[]|null $connectedDomains
	 * @return $this
	 */
	public function setConnectedDomains($connectedDomains = null): self
	{
		$this->connectedDomains = [];
		if ($connectedDomains === null) return $this;
		foreach ($connectedDomains as $item) {
		    $this->addConnectedDomainsValue($item);
		}
		return $this;
	}


	private function addConnectedDomainsValue($connectedDomains)
	{
		if ($connectedDomains !== null && !$connectedDomains instanceof \HipexPackApi\Generated\Schema\Type\Domain) {
		    $connectedDomains = new \HipexPackApi\Generated\Schema\Type\Domain($connectedDomains);
		}
		$this->connectedDomains[] = $connectedDomains;
	}


	/**
	 * certificateError
	 *
	 * @return string|null
	 */
	public function getCertificateError()
	{
		return $this->certificateError;
	}


	/**
	 * certificateError
	 *
	 * @param string|null $certificateError
	 * @return $this
	 */
	public function setCertificateError($certificateError = null): self
	{
		$this->certificateError = $certificateError === null ? null : (string) $certificateError;
		return $this;
	}


	/**
	 * alternativeDomains
	 *
	 * @return string[]|null
	 */
	public function getAlternativeDomains()
	{
		return $this->alternativeDomains;
	}


	/**
	 * alternativeDomains
	 *
	 * @param string[]|null $alternativeDomains
	 * @return $this
	 */
	public function setAlternativeDomains($alternativeDomains = null): self
	{
		$this->alternativeDomains = [];
		if ($alternativeDomains === null) return $this;
		foreach ($alternativeDomains as $item) {
		    $this->addAlternativeDomainsValue($item);
		}
		return $this;
	}


	private function addAlternativeDomainsValue($alternativeDomains)
	{
		$this->alternativeDomains[] = $alternativeDomains;
	}


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
	 * issuer
	 *
	 * @return string|null
	 */
	public function getIssuer()
	{
		return $this->issuer;
	}


	/**
	 * issuer
	 *
	 * @param string|null $issuer
	 * @return $this
	 */
	public function setIssuer($issuer = null): self
	{
		$this->issuer = $issuer === null ? null : (string) $issuer;
		return $this;
	}


	/**
	 * expires
	 *
	 * @return DateTime|null
	 */
	public function getExpires()
	{
		return $this->expires;
	}


	/**
	 * expires
	 *
	 * @param DateTime|null $expires
	 * @return $this
	 */
	public function setExpires($expires = null): self
	{
		$this->expires = $expires === null ? null : (DateTime) $expires;
		return $this;
	}


	/**
	 * domain
	 *
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}


	/**
	 * domain
	 *
	 * @param string|null $domain
	 * @return $this
	 */
	public function setDomain($domain = null): self
	{
		$this->domain = $domain === null ? null : (string) $domain;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'connectedDomainPointers' => $this->connectedDomainPointers,
		    'connectedDomains' => $this->connectedDomains,
		    'certificateError' => $this->certificateError,
		    'alternativeDomains' => $this->alternativeDomains,
		    'id' => $this->id,
		    'issuer' => $this->issuer,
		    'expires' => $this->expires,
		    'domain' => $this->domain,
		    'certificate' => $this->certificate,
		    'chain' => $this->chain,
		    'key' => $this->key,
		];
	}
}
