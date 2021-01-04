<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * LetsEncrypt certificate.
 * @codeCoverageIgnore
 */
class LetsEncryptCertificate extends \HipexPackApi\Schema\BaseType implements JsonSerializable
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
	 * @var DateTimeInterface|null
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
	 * @return DateTimeInterface|null
	 */
	public function getExpires()
	{
		return $this->expires;
	}


	/**
	 * expires
	 *
	 * @param DateTimeInterface|null $expires
	 * @return $this
	 */
	public function setExpires($expires = null): self
	{
		if ($expires !== null && !$expires instanceof DateTimeInterface) {
		    $expires = new \DateTimeImmutable($expires);
		}
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
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->issuer !== null) $result['issuer'] = $this->issuer;
		if ($this->expires !== null) $result['expires'] = $this->expires;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->certificate !== null) $result['certificate'] = $this->certificate;
		if ($this->chain !== null) $result['chain'] = $this->chain;
		if ($this->key !== null) $result['key'] = $this->key;
		return $result;
	}
}
