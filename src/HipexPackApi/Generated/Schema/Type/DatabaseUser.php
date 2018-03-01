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
 * Database user entity on domain
 * @codeCoverageIgnore
 */
class DatabaseUser extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * username
	 *
	 * @var string|null
	 */
	private $username;

	/**
	 * databases
	 *
	 * @var Database[]|null
	 */
	private $databases;

	/**
	 * domain
	 *
	 * @var Domain|null
	 */
	private $domain;

	/**
	 * readOnly
	 *
	 * @var bool|null
	 */
	private $readOnly;


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
	 * username
	 *
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->username;
	}


	/**
	 * username
	 *
	 * @param string|null $username
	 * @return $this
	 */
	public function setUsername($username = null): self
	{
		$this->username = $username;
		return $this;
	}


	/**
	 * databases
	 *
	 * @return Database[]|null
	 */
	public function getDatabases()
	{
		return $this->databases;
	}


	/**
	 * databases
	 *
	 * @param Database[]|null $databases
	 * @return $this
	 */
	public function setDatabases($databases = null): self
	{
		$this->databases = [];
		foreach ($databases as $item) {
		    $this->addDatabasesValue($item);
		}
		return $this;
	}


	private function addDatabasesValue($databases)
	{
		if ($databases !== null && !$databases instanceof \HipexPackApi\Generated\Schema\Type\Database) {
		    $databases = new \HipexPackApi\Generated\Schema\Type\Database($databases);
		}
		$this->databases[] = $databases;
	}


	/**
	 * domain
	 *
	 * @return Domain|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}


	/**
	 * domain
	 *
	 * @param Domain|null $domain
	 * @return $this
	 */
	public function setDomain($domain = null): self
	{
		if ($domain !== null && !$domain instanceof \HipexPackApi\Generated\Schema\Type\Domain) {
		    $domain = new \HipexPackApi\Generated\Schema\Type\Domain($domain);
		}
		$this->domain = $domain;
		return $this;
	}


	/**
	 * readOnly
	 *
	 * @return bool|null
	 */
	public function getReadOnly()
	{
		return $this->readOnly;
	}


	/**
	 * readOnly
	 *
	 * @param bool|null $readOnly
	 * @return $this
	 */
	public function setReadOnly($readOnly = null): self
	{
		$this->readOnly = $readOnly;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'username' => $this->username,
		    'databases' => $this->databases,
		    'domain' => $this->domain,
		    'readOnly' => $this->readOnly,
		];
	}
}
