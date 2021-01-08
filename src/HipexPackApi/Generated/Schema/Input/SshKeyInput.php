<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Input type for ssh key mutations.
 * @codeCoverageIgnore
 */
class SshKeyInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * key
	 *
	 * @var string|null
	 */
	private $key;

	/**
	 * type
	 *
	 * @var string|null
	 */
	private $type;

	/**
	 * validUntil
	 *
	 * @var DateTimeInterface|null
	 */
	private $validUntil;

	/**
	 * fromPattern
	 *
	 * @var string|null
	 */
	private $fromPattern;

	/**
	 * servers
	 *
	 * @var int[]|null
	 */
	private $servers;

	/**
	 * users
	 *
	 * @var int[]|null
	 */
	private $users;


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
	 * fromPattern
	 *
	 * @return string|null
	 */
	public function getFromPattern()
	{
		return $this->fromPattern;
	}


	/**
	 * fromPattern
	 *
	 * @param string|null $fromPattern
	 * @return $this
	 */
	public function setFromPattern($fromPattern = null): self
	{
		$this->fromPattern = $fromPattern === null ? null : (string) $fromPattern;
		return $this;
	}


	/**
	 * servers
	 *
	 * @return int[]|null
	 */
	public function getServers()
	{
		return $this->servers;
	}


	/**
	 * servers
	 *
	 * @param int[]|null $servers
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
		$this->servers[] = $servers;
	}


	/**
	 * users
	 *
	 * @return int[]|null
	 */
	public function getUsers()
	{
		return $this->users;
	}


	/**
	 * users
	 *
	 * @param int[]|null $users
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
		$this->users[] = $users;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->key !== null) $result['key'] = $this->key;
		if ($this->type !== null) $result['type'] = $this->type;
		if ($this->validUntil !== null) $result['validUntil'] = $this->validUntil;
		if ($this->fromPattern !== null) $result['fromPattern'] = $this->fromPattern;
		if ($this->servers !== null) $result['servers'] = $this->servers;
		if ($this->users !== null) $result['users'] = $this->users;
		return $result;
	}
}
