<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Database on domain
 * @codeCoverageIgnore
 */
class DatabaseInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
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
	 * database
	 *
	 * @var string|null
	 */
	private $database;

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
	 * backup
	 *
	 * @var bool|null
	 */
	private $backup;

	/**
	 * charset
	 *
	 * @var string|null
	 */
	private $charset;

	/**
	 * readOnly
	 *
	 * @var bool|null
	 */
	private $readOnly;


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
	 * charset
	 *
	 * @return string|null
	 */
	public function getCharset()
	{
		return $this->charset;
	}


	/**
	 * charset
	 *
	 * @param string|null $charset
	 * @return $this
	 */
	public function setCharset($charset = null): self
	{
		$this->charset = $charset;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->database !== null) $result['database'] = $this->database;
		if ($this->username !== null) $result['username'] = $this->username;
		if ($this->password !== null) $result['password'] = $this->password;
		if ($this->backup !== null) $result['backup'] = $this->backup;
		if ($this->charset !== null) $result['charset'] = $this->charset;
		if ($this->readOnly !== null) $result['readOnly'] = $this->readOnly;
		return $result;
	}
}
