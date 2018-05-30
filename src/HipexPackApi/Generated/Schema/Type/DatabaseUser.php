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
		$this->username = $username === null ? null : (string) $username;
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
		if ($databases === null) return $this;
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
		$this->readOnly = $readOnly === null ? null : (bool) $readOnly;
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
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->username !== null) $result['username'] = $this->username;
		if ($this->databases !== null) $result['databases'] = $this->databases;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->readOnly !== null) $result['readOnly'] = $this->readOnly;
		if ($this->entityTypeName !== null) $result['entityTypeName'] = $this->entityTypeName;
		return $result;
	}
}
