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
 * FTP user entity on domain
 * @codeCoverageIgnore
 */
class FtpUserInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
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
	 * @var int|null
	 */
	private $domain;

	/**
	 * user
	 *
	 * @var int
	 */
	private $user;

	/**
	 * username
	 *
	 * @var string
	 */
	private $username;

	/**
	 * password
	 *
	 * @var string|null
	 */
	private $password;

	/**
	 * path
	 *
	 * @var string|null
	 */
	private $path;


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
	 * user
	 *
	 * @return int
	 */
	public function getUser(): int
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param int $user
	 * @return $this
	 */
	public function setUser($user): self
	{
		$this->user = $user;
		return $this;
	}


	/**
	 * username
	 *
	 * @return string
	 */
	public function getUsername(): string
	{
		return $this->username;
	}


	/**
	 * username
	 *
	 * @param string $username
	 * @return $this
	 */
	public function setUsername($username): self
	{
		$this->username = $username;
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
	 * path
	 *
	 * @return string|null
	 */
	public function getPath()
	{
		return $this->path;
	}


	/**
	 * path
	 *
	 * @param string|null $path
	 * @return $this
	 */
	public function setPath($path = null): self
	{
		$this->path = $path === null ? null : (string) $path;
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
		    'user' => $this->user,
		    'username' => $this->username,
		    'password' => $this->password,
		    'path' => $this->path,
		];
	}
}
