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
 * Domain pointer
 * @codeCoverageIgnore
 */
class DomainPointer extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * server
	 *
	 * @var Server|null
	 */
	private $server;

	/**
	 * letsEncryptCertificate
	 *
	 * @var LetsEncryptCertificate|null
	 */
	private $letsEncryptCertificate;

	/**
	 * letsEncryptSsl
	 *
	 * @var bool|null
	 */
	private $letsEncryptSsl;

	/**
	 * SSLCertificate
	 *
	 * @var SSLCertificate|null
	 */
	private $SSLCertificate;

	/**
	 * entityTypeName
	 *
	 * @var string|null
	 */
	private $entityTypeName;

	/**
	 * pointer
	 *
	 * @var string
	 */
	private $pointer;

	/**
	 * domain
	 *
	 * @var Domain
	 */
	private $domain;


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
	 * server
	 *
	 * @return Server|null
	 */
	public function getServer()
	{
		return $this->server;
	}


	/**
	 * server
	 *
	 * @param Server|null $server
	 * @return $this
	 */
	public function setServer($server = null): self
	{
		if ($server !== null && !$server instanceof \HipexPackApi\Generated\Schema\Type\Server) {
		    $server = new \HipexPackApi\Generated\Schema\Type\Server($server);
		}
		$this->server = $server;
		return $this;
	}


	/**
	 * letsEncryptCertificate
	 *
	 * @return LetsEncryptCertificate|null
	 */
	public function getLetsEncryptCertificate()
	{
		return $this->letsEncryptCertificate;
	}


	/**
	 * letsEncryptCertificate
	 *
	 * @param LetsEncryptCertificate|null $letsEncryptCertificate
	 * @return $this
	 */
	public function setLetsEncryptCertificate($letsEncryptCertificate = null): self
	{
		if ($letsEncryptCertificate !== null && !$letsEncryptCertificate instanceof \HipexPackApi\Generated\Schema\Type\LetsEncryptCertificate) {
		    $letsEncryptCertificate = new \HipexPackApi\Generated\Schema\Type\LetsEncryptCertificate($letsEncryptCertificate);
		}
		$this->letsEncryptCertificate = $letsEncryptCertificate;
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
	 * SSLCertificate
	 *
	 * @return SSLCertificate|null
	 */
	public function getSSLCertificate()
	{
		return $this->SSLCertificate;
	}


	/**
	 * SSLCertificate
	 *
	 * @param SSLCertificate|null $SSLCertificate
	 * @return $this
	 */
	public function setSSLCertificate($SSLCertificate = null): self
	{
		if ($SSLCertificate !== null && !$SSLCertificate instanceof \HipexPackApi\Generated\Schema\Type\SSLCertificate) {
		    $SSLCertificate = new \HipexPackApi\Generated\Schema\Type\SSLCertificate($SSLCertificate);
		}
		$this->SSLCertificate = $SSLCertificate;
		return $this;
	}


	/**
	 * entityTypeName
	 *
	 * @return string|null
	 */
	public function getEntityTypeName()
	{
		return $this->entityTypeName;
	}


	/**
	 * entityTypeName
	 *
	 * @param string|null $entityTypeName
	 * @return $this
	 */
	public function setEntityTypeName($entityTypeName = null): self
	{
		$this->entityTypeName = $entityTypeName === null ? null : (string) $entityTypeName;
		return $this;
	}


	/**
	 * pointer
	 *
	 * @return string
	 */
	public function getPointer(): string
	{
		return $this->pointer;
	}


	/**
	 * pointer
	 *
	 * @param string $pointer
	 * @return $this
	 */
	public function setPointer($pointer): self
	{
		$this->pointer = $pointer;
		return $this;
	}


	/**
	 * domain
	 *
	 * @return Domain
	 */
	public function getDomain(): Domain
	{
		return $this->domain;
	}


	/**
	 * domain
	 *
	 * @param Domain $domain
	 * @return $this
	 */
	public function setDomain($domain): self
	{
		if ($domain !== null && !$domain instanceof \HipexPackApi\Generated\Schema\Type\Domain) {
		    $domain = new \HipexPackApi\Generated\Schema\Type\Domain($domain);
		}
		$this->domain = $domain;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->server !== null) $result['server'] = $this->server;
		if ($this->letsEncryptCertificate !== null) $result['letsEncryptCertificate'] = $this->letsEncryptCertificate;
		if ($this->letsEncryptSsl !== null) $result['letsEncryptSsl'] = $this->letsEncryptSsl;
		if ($this->SSLCertificate !== null) $result['SSLCertificate'] = $this->SSLCertificate;
		if ($this->entityTypeName !== null) $result['entityTypeName'] = $this->entityTypeName;
		if ($this->pointer !== null) $result['pointer'] = $this->pointer;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		return $result;
	}
}
