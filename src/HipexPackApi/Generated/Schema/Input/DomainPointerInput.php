<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-19
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
	 * monitor
	 *
	 * @var bool|null
	 */
	private $monitor;

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
	 * monitor
	 *
	 * @return bool|null
	 */
	public function getMonitor()
	{
		return $this->monitor;
	}


	/**
	 * monitor
	 *
	 * @param bool|null $monitor
	 * @return $this
	 */
	public function setMonitor($monitor = null): self
	{
		$this->monitor = $monitor === null ? null : (bool) $monitor;
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
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->pointer !== null) $result['pointer'] = $this->pointer;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->monitor !== null) $result['monitor'] = $this->monitor;
		if ($this->certificate !== null) $result['certificate'] = $this->certificate;
		if ($this->letsEncryptSsl !== null) $result['letsEncryptSsl'] = $this->letsEncryptSsl;
		return $result;
	}
}
