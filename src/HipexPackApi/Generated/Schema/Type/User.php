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
 * SSH user entity on Server
 * @codeCoverageIgnore
 */
class User extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * user
	 *
	 * @var string
	 */
	private $user;

	/**
	 * passwordEnabled
	 *
	 * @var bool|null
	 */
	private $passwordEnabled;

	/**
	 * server
	 *
	 * @var Server
	 */
	private $server;

	/**
	 * sshKeys
	 *
	 * @var SSHKey[]|null
	 */
	private $sshKeys;

	/**
	 * entityTypeName
	 *
	 * @var string|null
	 */
	private $entityTypeName;


	/**
	 * id
	 *
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param int $id
	 * @return $this
	 */
	public function setId($id): self
	{
		$this->id = $id;
		return $this;
	}


	/**
	 * user
	 *
	 * @return string
	 */
	public function getUser(): string
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param string $user
	 * @return $this
	 */
	public function setUser($user): self
	{
		$this->user = $user;
		return $this;
	}


	/**
	 * passwordEnabled
	 *
	 * @return bool|null
	 */
	public function getPasswordEnabled()
	{
		return $this->passwordEnabled;
	}


	/**
	 * passwordEnabled
	 *
	 * @param bool|null $passwordEnabled
	 * @return $this
	 */
	public function setPasswordEnabled($passwordEnabled = null): self
	{
		$this->passwordEnabled = $passwordEnabled === null ? null : (bool) $passwordEnabled;
		return $this;
	}


	/**
	 * server
	 *
	 * @return Server
	 */
	public function getServer(): Server
	{
		return $this->server;
	}


	/**
	 * server
	 *
	 * @param Server $server
	 * @return $this
	 */
	public function setServer($server): self
	{
		if ($server !== null && !$server instanceof \HipexPackApi\Generated\Schema\Type\Server) {
		    $server = new \HipexPackApi\Generated\Schema\Type\Server($server);
		}
		$this->server = $server;
		return $this;
	}


	/**
	 * sshKeys
	 *
	 * @return SSHKey[]|null
	 */
	public function getSshKeys()
	{
		return $this->sshKeys;
	}


	/**
	 * sshKeys
	 *
	 * @param SSHKey[]|null $sshKeys
	 * @return $this
	 */
	public function setSshKeys($sshKeys = null): self
	{
		$this->sshKeys = [];
		if ($sshKeys === null) return $this;
		foreach ($sshKeys as $item) {
		    $this->addSshKeysValue($item);
		}
		return $this;
	}


	private function addSshKeysValue($sshKeys)
	{
		if ($sshKeys !== null && !$sshKeys instanceof \HipexPackApi\Generated\Schema\Type\SSHKey) {
		    $sshKeys = new \HipexPackApi\Generated\Schema\Type\SSHKey($sshKeys);
		}
		$this->sshKeys[] = $sshKeys;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'user' => $this->user,
		    'passwordEnabled' => $this->passwordEnabled,
		    'server' => $this->server,
		    'sshKeys' => $this->sshKeys,
		    'entityTypeName' => $this->entityTypeName,
		];
	}
}
