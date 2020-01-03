<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Input type for user mutations.
 * @codeCoverageIgnore
 */
class UserInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * user
	 *
	 * @var string|null
	 */
	private $user;

	/**
	 * password
	 *
	 * @var string|null
	 */
	private $password;

	/**
	 * server
	 *
	 * @var int|null
	 */
	private $server;

	/**
	 * passwordEnabled
	 *
	 * @var bool|null
	 */
	private $passwordEnabled;


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
	 * user
	 *
	 * @return string|null
	 */
	public function getUser()
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param string|null $user
	 * @return $this
	 */
	public function setUser($user = null): self
	{
		$this->user = $user === null ? null : (string) $user;
		return $this;
	}


	/**
	 * password
	 *
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}


	/**
	 * password
	 *
	 * @param string|null $password
	 * @return $this
	 */
	public function setPassword($password = null): self
	{
		$this->password = $password === null ? null : (string) $password;
		return $this;
	}


	/**
	 * server
	 *
	 * @return int|null
	 */
	public function getServer()
	{
		return $this->server;
	}


	/**
	 * server
	 *
	 * @param int|null $server
	 * @return $this
	 */
	public function setServer($server = null): self
	{
		$this->server = $server === null ? null : (int) $server;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->user !== null) $result['user'] = $this->user;
		if ($this->password !== null) $result['password'] = $this->password;
		if ($this->server !== null) $result['server'] = $this->server;
		if ($this->passwordEnabled !== null) $result['passwordEnabled'] = $this->passwordEnabled;
		return $result;
	}
}
