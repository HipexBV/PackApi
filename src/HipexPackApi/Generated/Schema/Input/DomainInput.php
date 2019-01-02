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
	 * blackFireId
	 *
	 * @var string|null
	 */
	private $blackFireId;

	/**
	 * blackFireToken
	 *
	 * @var string|null
	 */
	private $blackFireToken;


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
		$this->backup = $backup === null ? null : (bool) $backup;
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
		$this->user = $user === null ? null : (int) $user;
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
		$this->host = $host === null ? null : (int) $host;
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
		$this->newRelicKey = $newRelicKey === null ? null : (string) $newRelicKey;
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
		$this->phpMyAdmin = $phpMyAdmin === null ? null : (bool) $phpMyAdmin;
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
	 * blackFireId
	 *
	 * @return string|null
	 */
	public function getBlackFireId()
	{
		return $this->blackFireId;
	}


	/**
	 * blackFireId
	 *
	 * @param string|null $blackFireId
	 * @return $this
	 */
	public function setBlackFireId($blackFireId = null): self
	{
		$this->blackFireId = $blackFireId === null ? null : (string) $blackFireId;
		return $this;
	}


	/**
	 * blackFireToken
	 *
	 * @return string|null
	 */
	public function getBlackFireToken()
	{
		return $this->blackFireToken;
	}


	/**
	 * blackFireToken
	 *
	 * @param string|null $blackFireToken
	 * @return $this
	 */
	public function setBlackFireToken($blackFireToken = null): self
	{
		$this->blackFireToken = $blackFireToken === null ? null : (string) $blackFireToken;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->backup !== null) $result['backup'] = $this->backup;
		if ($this->mainPhp !== null) $result['mainPhp'] = $this->mainPhp;
		if ($this->alternativePhp !== null) $result['alternativePhp'] = $this->alternativePhp;
		if ($this->user !== null) $result['user'] = $this->user;
		if ($this->host !== null) $result['host'] = $this->host;
		if ($this->certificate !== null) $result['certificate'] = $this->certificate;
		if ($this->newRelicKey !== null) $result['newRelicKey'] = $this->newRelicKey;
		if ($this->saveAccessLogs !== null) $result['saveAccessLogs'] = $this->saveAccessLogs;
		if ($this->phpMyAdmin !== null) $result['phpMyAdmin'] = $this->phpMyAdmin;
		if ($this->monitor !== null) $result['monitor'] = $this->monitor;
		if ($this->letsEncryptSsl !== null) $result['letsEncryptSsl'] = $this->letsEncryptSsl;
		if ($this->blackFireId !== null) $result['blackFireId'] = $this->blackFireId;
		if ($this->blackFireToken !== null) $result['blackFireToken'] = $this->blackFireToken;
		return $result;
	}
}
