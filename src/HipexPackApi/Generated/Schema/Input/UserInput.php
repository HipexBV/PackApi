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
		$this->id = $id;
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
		$this->user = $user;
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
		$this->password = $password;
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
		$this->server = $server;
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
		$this->passwordEnabled = $passwordEnabled;
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
		    'password' => $this->password,
		    'server' => $this->server,
		    'passwordEnabled' => $this->passwordEnabled,
		];
	}
}
