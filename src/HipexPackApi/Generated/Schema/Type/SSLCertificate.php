<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTime;
use JsonSerializable;

/**
 * SSL certificate.
 * @codeCoverageIgnore
 */
class SSLCertificate extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
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
	 * alternativeDomains
	 *
	 * @var string[]|null
	 */
	private $alternativeDomains;

	/**
	 * certificate
	 *
	 * @var string
	 */
	private $certificate;

	/**
	 * chain
	 *
	 * @var string
	 */
	private $chain;

	/**
	 * key
	 *
	 * @var string
	 */
	private $key;

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
		$this->id = $id;
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
		$this->issuer = $issuer;
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
		$this->expires = $expires;
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
		$this->domain = $domain;
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
	 * certificate
	 *
	 * @return string
	 */
	public function getCertificate(): string
	{
		return $this->certificate;
	}


	/**
	 * certificate
	 *
	 * @param string $certificate
	 * @return $this
	 */
	public function setCertificate($certificate): self
	{
		$this->certificate = $certificate;
		return $this;
	}


	/**
	 * chain
	 *
	 * @return string
	 */
	public function getChain(): string
	{
		return $this->chain;
	}


	/**
	 * chain
	 *
	 * @param string $chain
	 * @return $this
	 */
	public function setChain($chain): self
	{
		$this->chain = $chain;
		return $this;
	}


	/**
	 * key
	 *
	 * @return string
	 */
	public function getKey(): string
	{
		return $this->key;
	}


	/**
	 * key
	 *
	 * @param string $key
	 * @return $this
	 */
	public function setKey($key): self
	{
		$this->key = $key;
		return $this;
	}


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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'issuer' => $this->issuer,
		    'expires' => $this->expires,
		    'domain' => $this->domain,
		    'alternativeDomains' => $this->alternativeDomains,
		    'certificate' => $this->certificate,
		    'chain' => $this->chain,
		    'key' => $this->key,
		    'connectedDomainPointers' => $this->connectedDomainPointers,
		    'connectedDomains' => $this->connectedDomains,
		];
	}
}
