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
 * Database entity on domain
 * @codeCoverageIgnore
 */
class Database extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * database
	 *
	 * @var string|null
	 */
	private $database;

	/**
	 * backup
	 *
	 * @var bool|null
	 */
	private $backup;

	/**
	 * users
	 *
	 * @var DatabaseUser[]|null
	 */
	private $users;

	/**
	 * domain
	 *
	 * @var Domain|null
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
	 * database
	 *
	 * @return string|null
	 */
	public function getDatabase()
	{
		return $this->database;
	}


	/**
	 * database
	 *
	 * @param string|null $database
	 * @return $this
	 */
	public function setDatabase($database = null): self
	{
		$this->database = $database === null ? null : (string) $database;
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
	 * users
	 *
	 * @return DatabaseUser[]|null
	 */
	public function getUsers()
	{
		return $this->users;
	}


	/**
	 * users
	 *
	 * @param DatabaseUser[]|null $users
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
		if ($users !== null && !$users instanceof \HipexPackApi\Generated\Schema\Type\DatabaseUser) {
		    $users = new \HipexPackApi\Generated\Schema\Type\DatabaseUser($users);
		}
		$this->users[] = $users;
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
		if ($this->database !== null) $result['database'] = $this->database;
		if ($this->backup !== null) $result['backup'] = $this->backup;
		if ($this->users !== null) $result['users'] = $this->users;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->entityTypeName !== null) $result['entityTypeName'] = $this->entityTypeName;
		return $result;
	}
}
