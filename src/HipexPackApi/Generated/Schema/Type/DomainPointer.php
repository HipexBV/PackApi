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
	 * sslCertificate
	 *
	 * @var SSLCertificate|null
	 */
	private $sslCertificate;

	/**
	 * letsEncryptSsl
	 *
	 * @var bool|null
	 */
	private $letsEncryptSsl;

	/**
	 * certificate
	 *
	 * @var SSLCertificate|null
	 */
	private $certificate;

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
		$this->id = $id;
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
	 * sslCertificate
	 *
	 * @return SSLCertificate|null
	 */
	public function getSslCertificate()
	{
		return $this->sslCertificate;
	}


	/**
	 * sslCertificate
	 *
	 * @param SSLCertificate|null $sslCertificate
	 * @return $this
	 */
	public function setSslCertificate($sslCertificate = null): self
	{
		if ($sslCertificate !== null && !$sslCertificate instanceof \HipexPackApi\Generated\Schema\Type\SSLCertificate) {
		    $sslCertificate = new \HipexPackApi\Generated\Schema\Type\SSLCertificate($sslCertificate);
		}
		$this->sslCertificate = $sslCertificate;
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
		$this->letsEncryptSsl = $letsEncryptSsl;
		return $this;
	}


	/**
	 * certificate
	 *
	 * @return SSLCertificate|null
	 */
	public function getCertificate()
	{
		return $this->certificate;
	}


	/**
	 * certificate
	 *
	 * @param SSLCertificate|null $certificate
	 * @return $this
	 */
	public function setCertificate($certificate = null): self
	{
		if ($certificate !== null && !$certificate instanceof \HipexPackApi\Generated\Schema\Type\SSLCertificate) {
		    $certificate = new \HipexPackApi\Generated\Schema\Type\SSLCertificate($certificate);
		}
		$this->certificate = $certificate;
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
		return [
		    'id' => $this->id,
		    'server' => $this->server,
		    'sslCertificate' => $this->sslCertificate,
		    'letsEncryptSsl' => $this->letsEncryptSsl,
		    'certificate' => $this->certificate,
		    'pointer' => $this->pointer,
		    'domain' => $this->domain,
		];
	}
}
