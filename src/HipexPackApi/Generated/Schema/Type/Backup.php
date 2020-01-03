<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Created backups that are available for download or restore
 * @codeCoverageIgnore
 */
class Backup extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var string|null
	 */
	private $id;

	/**
	 * created
	 *
	 * @var DateTimeInterface|null
	 */
	private $created;

	/**
	 * size
	 *
	 * @var int|null
	 */
	private $size;

	/**
	 * url
	 *
	 * @var string|null
	 */
	private $url;

	/**
	 * domain
	 *
	 * @var Domain|null
	 */
	private $domain;

	/**
	 * database
	 *
	 * @var Database|null
	 */
	private $database;


	/**
	 * id
	 *
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param string|null $id
	 * @return $this
	 */
	public function setId($id = null): self
	{
		$this->id = $id === null ? null : (string) $id;
		return $this;
	}


	/**
	 * created
	 *
	 * @return DateTimeInterface|null
	 */
	public function getCreated()
	{
		return $this->created;
	}


	/**
	 * created
	 *
	 * @param DateTimeInterface|null $created
	 * @return $this
	 */
	public function setCreated($created = null): self
	{
		if ($created !== null && !$created instanceof DateTimeInterface) {
		    $created = new \DateTimeImmutable($created);
		}
		$this->created = $created;
		return $this;
	}


	/**
	 * size
	 *
	 * @return int|null
	 */
	public function getSize()
	{
		return $this->size;
	}


	/**
	 * size
	 *
	 * @param int|null $size
	 * @return $this
	 */
	public function setSize($size = null): self
	{
		$this->size = $size === null ? null : (int) $size;
		return $this;
	}


	/**
	 * url
	 *
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}


	/**
	 * url
	 *
	 * @param string|null $url
	 * @return $this
	 */
	public function setUrl($url = null): self
	{
		$this->url = $url === null ? null : (string) $url;
		return $this;
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
	 * database
	 *
	 * @return Database|null
	 */
	public function getDatabase()
	{
		return $this->database;
	}


	/**
	 * database
	 *
	 * @param Database|null $database
	 * @return $this
	 */
	public function setDatabase($database = null): self
	{
		if ($database !== null && !$database instanceof \HipexPackApi\Generated\Schema\Type\Database) {
		    $database = new \HipexPackApi\Generated\Schema\Type\Database($database);
		}
		$this->database = $database;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->created !== null) $result['created'] = $this->created;
		if ($this->size !== null) $result['size'] = $this->size;
		if ($this->url !== null) $result['url'] = $this->url;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->database !== null) $result['database'] = $this->database;
		return $result;
	}
}
