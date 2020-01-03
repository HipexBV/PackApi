<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * SSH Key details
 * @codeCoverageIgnore
 */
class SSHKey extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * type
	 *
	 * @var string|null
	 */
	private $type;

	/**
	 * key
	 *
	 * @var string|null
	 */
	private $key;

	/**
	 * validUntil
	 *
	 * @var DateTimeInterface|null
	 */
	private $validUntil;

	/**
	 * users
	 *
	 * @var User[]|null
	 */
	private $users;

	/**
	 * servers
	 *
	 * @var Server[]|null
	 */
	private $servers;

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
	 * name
	 *
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * name
	 *
	 * @param string|null $name
	 * @return $this
	 */
	public function setName($name = null): self
	{
		$this->name = $name === null ? null : (string) $name;
		return $this;
	}


	/**
	 * type
	 *
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}


	/**
	 * type
	 *
	 * @param string|null $type
	 * @return $this
	 */
	public function setType($type = null): self
	{
		$this->type = $type;
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
	 * validUntil
	 *
	 * @return DateTimeInterface|null
	 */
	public function getValidUntil()
	{
		return $this->validUntil;
	}


	/**
	 * validUntil
	 *
	 * @param DateTimeInterface|null $validUntil
	 * @return $this
	 */
	public function setValidUntil($validUntil = null): self
	{
		if ($validUntil !== null && !$validUntil instanceof DateTimeInterface) {
		    $validUntil = new \DateTimeImmutable($validUntil);
		}
		$this->validUntil = $validUntil;
		return $this;
	}


	/**
	 * users
	 *
	 * @return User[]|null
	 */
	public function getUsers()
	{
		return $this->users;
	}


	/**
	 * users
	 *
	 * @param User[]|null $users
	 * @return $this
	 */
	public function setUsers($users = null): self
	{
		$this->users = [];
		if ($users === null) return $this;
		foreach ($users as $item) {
		    $this->addUsersValue($item);
		}
		return $this;
	}


	private function addUsersValue($users)
	{
		if ($users !== null && !$users instanceof \HipexPackApi\Generated\Schema\Type\User) {
		    $users = new \HipexPackApi\Generated\Schema\Type\User($users);
		}
		$this->users[] = $users;
	}


	/**
	 * servers
	 *
	 * @return Server[]|null
	 */
	public function getServers()
	{
		return $this->servers;
	}


	/**
	 * servers
	 *
	 * @param Server[]|null $servers
	 * @return $this
	 */
	public function setServers($servers = null): self
	{
		$this->servers = [];
		if ($servers === null) return $this;
		foreach ($servers as $item) {
		    $this->addServersValue($item);
		}
		return $this;
	}


	private function addServersValue($servers)
	{
		if ($servers !== null && !$servers instanceof \HipexPackApi\Generated\Schema\Type\Server) {
		    $servers = new \HipexPackApi\Generated\Schema\Type\Server($servers);
		}
		$this->servers[] = $servers;
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
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->type !== null) $result['type'] = $this->type;
		if ($this->key !== null) $result['key'] = $this->key;
		if ($this->validUntil !== null) $result['validUntil'] = $this->validUntil;
		if ($this->users !== null) $result['users'] = $this->users;
		if ($this->servers !== null) $result['servers'] = $this->servers;
		if ($this->entityTypeName !== null) $result['entityTypeName'] = $this->entityTypeName;
		return $result;
	}
}
