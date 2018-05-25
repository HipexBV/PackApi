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
		$this->certificate = $certificate;
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
		$this->chain = $chain;
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
		$this->key = $key;
		return $this;
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
		    'certificate' => $this->certificate,
		    'chain' => $this->chain,
		    'key' => $this->key,
		];
	}
}
