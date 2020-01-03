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
 * Input type for database user mutations.
 * @codeCoverageIgnore
 */
class DatabaseUserInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * username
	 *
	 * @var string|null
	 */
	private $username;

	/**
	 * password
	 *
	 * @var string|null
	 */
	private $password;

	/**
	 * readOnly
	 *
	 * @var bool|null
	 */
	private $readOnly;

	/**
	 * databases
	 *
	 * @var int[]|null
	 */
	private $databases;


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
	 * databases
	 *
	 * @return int[]|null
	 */
	public function getDatabases()
	{
		return $this->databases;
	}


	/**
	 * databases
	 *
	 * @param int[]|null $databases
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
		$this->databases[] = $databases;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->username !== null) $result['username'] = $this->username;
		if ($this->password !== null) $result['password'] = $this->password;
		if ($this->readOnly !== null) $result['readOnly'] = $this->readOnly;
		if ($this->databases !== null) $result['databases'] = $this->databases;
		return $result;
	}
}
