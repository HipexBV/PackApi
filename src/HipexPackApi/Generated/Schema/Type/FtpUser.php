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
 * FTP user entity on domain
 * @codeCoverageIgnore
 */
class FtpUser extends \HipexPackApi\Schema\BaseType implements JsonSerializable
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
	 * @var User
	 */
	private $user;

	/**
	 * username
	 *
	 * @var string
	 */
	private $username;

	/**
	 * path
	 *
	 * @var string|null
	 */
	private $path;

	/**
	 * domain
	 *
	 * @var Domain
	 */
	private $domain;

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
	 * @return User
	 */
	public function getUser(): User
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param User $user
	 * @return $this
	 */
	public function setUser($user): self
	{
		if ($user !== null && !$user instanceof \HipexPackApi\Generated\Schema\Type\User) {
		    $user = new \HipexPackApi\Generated\Schema\Type\User($user);
		}
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
		    'username' => $this->username,
		    'path' => $this->path,
		    'domain' => $this->domain,
		    'entityTypeName' => $this->entityTypeName,
		];
	}
}
