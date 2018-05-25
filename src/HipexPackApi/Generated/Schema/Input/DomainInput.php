<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;
use string;

/**
 * Domain entity
 * @codeCoverageIgnore
 */
class DomainInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * domain
	 *
	 * @var string|null
	 */
	private $domain;

	/**
	 * backup
	 *
	 * @var bool|null
	 */
	private $backup;

	/**
	 * mainPhp
	 *
	 * @var string|null
	 */
	private $mainPhp;

	/**
	 * alternativePhp
	 *
	 * @var string|null
	 */
	private $alternativePhp;

	/**
	 * user
	 *
	 * @var int|null
	 */
	private $user;

	/**
	 * host
	 *
	 * @var int|null
	 */
	private $host;

	/**
	 * certificate
	 *
	 * @var int|null
	 */
	private $certificate;

	/**
	 * newRelicKey
	 *
	 * @var string|null
	 */
	private $newRelicKey;

	/**
	 * saveAccessLogs
	 *
	 * @var string|null
	 */
	private $saveAccessLogs;

	/**
	 * phpMyAdmin
	 *
	 * @var bool|null
	 */
	private $phpMyAdmin;

	/**
	 * monitor
	 *
	 * @var bool|null
	 */
	private $monitor;

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
		$this->id = $id;
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
	 * backup
	 *
	 * @return bool|null
	 */
	public function getBackup()
	{
		return $this->backup;
	}


	/**
	 * backup
	 *
	 * @param bool|null $backup
	 * @return $this
	 */
	public function setBackup($backup = null): self
	{
		$this->backup = $backup;
		return $this;
	}


	/**
	 * mainPhp
	 *
	 * @return string|null
	 */
	public function getMainPhp()
	{
		return $this->mainPhp;
	}


	/**
	 * mainPhp
	 *
	 * @param string|null $mainPhp
	 * @return $this
	 */
	public function setMainPhp($mainPhp = null): self
	{
		if ($mainPhp !== null && !$mainPhp instanceof \HipexPackApi\Generated\Schema\Type\string) {
		    $mainPhp = new \HipexPackApi\Generated\Schema\Type\string($mainPhp);
		}
		$this->mainPhp = $mainPhp;
		return $this;
	}


	/**
	 * alternativePhp
	 *
	 * @return string|null
	 */
	public function getAlternativePhp()
	{
		return $this->alternativePhp;
	}


	/**
	 * alternativePhp
	 *
	 * @param string|null $alternativePhp
	 * @return $this
	 */
	public function setAlternativePhp($alternativePhp = null): self
	{
		if ($alternativePhp !== null && !$alternativePhp instanceof \HipexPackApi\Generated\Schema\Type\string) {
		    $alternativePhp = new \HipexPackApi\Generated\Schema\Type\string($alternativePhp);
		}
		$this->alternativePhp = $alternativePhp;
		return $this;
	}


	/**
	 * user
	 *
	 * @return int|null
	 */
	public function getUser()
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param int|null $user
	 * @return $this
	 */
	public function setUser($user = null): self
	{
		$this->user = $user;
		return $this;
	}


	/**
	 * host
	 *
	 * @return int|null
	 */
	public function getHost()
	{
		return $this->host;
	}


	/**
	 * host
	 *
	 * @param int|null $host
	 * @return $this
	 */
	public function setHost($host = null): self
	{
		$this->host = $host;
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
		$this->certificate = $certificate;
		return $this;
	}


	/**
	 * newRelicKey
	 *
	 * @return string|null
	 */
	public function getNewRelicKey()
	{
		return $this->newRelicKey;
	}


	/**
	 * newRelicKey
	 *
	 * @param string|null $newRelicKey
	 * @return $this
	 */
	public function setNewRelicKey($newRelicKey = null): self
	{
		$this->newRelicKey = $newRelicKey;
		return $this;
	}


	/**
	 * saveAccessLogs
	 *
	 * @return string|null
	 */
	public function getSaveAccessLogs()
	{
		return $this->saveAccessLogs;
	}


	/**
	 * saveAccessLogs
	 *
	 * @param string|null $saveAccessLogs
	 * @return $this
	 */
	public function setSaveAccessLogs($saveAccessLogs = null): self
	{
		if ($saveAccessLogs !== null && !$saveAccessLogs instanceof \HipexPackApi\Generated\Schema\Type\string) {
		    $saveAccessLogs = new \HipexPackApi\Generated\Schema\Type\string($saveAccessLogs);
		}
		$this->saveAccessLogs = $saveAccessLogs;
		return $this;
	}


	/**
	 * phpMyAdmin
	 *
	 * @return bool|null
	 */
	public function getPhpMyAdmin()
	{
		return $this->phpMyAdmin;
	}


	/**
	 * phpMyAdmin
	 *
	 * @param bool|null $phpMyAdmin
	 * @return $this
	 */
	public function setPhpMyAdmin($phpMyAdmin = null): self
	{
		$this->phpMyAdmin = $phpMyAdmin;
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
		$this->monitor = $monitor;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'domain' => $this->domain,
		    'backup' => $this->backup,
		    'mainPhp' => $this->mainPhp,
		    'alternativePhp' => $this->alternativePhp,
		    'user' => $this->user,
		    'host' => $this->host,
		    'certificate' => $this->certificate,
		    'newRelicKey' => $this->newRelicKey,
		    'saveAccessLogs' => $this->saveAccessLogs,
		    'phpMyAdmin' => $this->phpMyAdmin,
		    'monitor' => $this->monitor,
		    'letsEncryptSsl' => $this->letsEncryptSsl,
		];
	}
}
