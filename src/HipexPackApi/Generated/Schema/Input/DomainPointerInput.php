<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Input type for domainpointer mutations.
 * @codeCoverageIgnore
 */
class DomainPointerInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * pointer
	 *
	 * @var string|null
	 */
	private $pointer;

	/**
	 * domain
	 *
	 * @var int|null
	 */
	private $domain;

	/**
	 * certificate
	 *
	 * @var int|null
	 */
	private $certificate;

	/**
	 * letsEncryptSsl
	 *
	 * @var bool|null
	 */
	private $letsEncryptSsl;


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
	 * pointer
	 *
	 * @return string|null
	 */
	public function getPointer()
	{
		return $this->pointer;
	}


	/**
	 * pointer
	 *
	 * @param string|null $pointer
	 * @return $this
	 */
	public function setPointer($pointer = null): self
	{
		$this->pointer = $pointer === null ? null : (string) $pointer;
		return $this;
	}


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
	 * certificate
	 *
	 * @return int|null
	 */
	public function getCertificate()
	{
		return $this->certificate;
	}


	/**
	 * certificate
	 *
	 * @param int|null $certificate
	 * @return $this
	 */
	public function setCertificate($certificate = null): self
	{
		$this->certificate = $certificate === null ? null : (int) $certificate;
		return $this;
	}


	/**
	 * letsEncryptSsl
	 *
	 * @return bool|null
	 */
	public function getLetsEncryptSsl()
	{
		return $this->letsEncryptSsl;
	}


	/**
	 * letsEncryptSsl
	 *
	 * @param bool|null $letsEncryptSsl
	 * @return $this
	 */
	public function setLetsEncryptSsl($letsEncryptSsl = null): self
	{
		$this->letsEncryptSsl = $letsEncryptSsl === null ? null : (bool) $letsEncryptSsl;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'pointer' => $this->pointer,
		    'domain' => $this->domain,
		    'certificate' => $this->certificate,
		    'letsEncryptSsl' => $this->letsEncryptSsl,
		];
	}
}
