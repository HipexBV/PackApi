<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Server change
 * @codeCoverageIgnore
 */
class ServerChange extends \HipexPackApi\Schema\BaseType implements JsonSerializable
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
	 * @var User|null
	 */
	private $user;

	/**
	 * entityType
	 *
	 * @var string
	 */
	private $entityType;

	/**
	 * entityId
	 *
	 * @var int|null
	 */
	private $entityId;

	/**
	 * entityName
	 *
	 * @var string
	 */
	private $entityName;

	/**
	 * action
	 *
	 * @var string
	 */
	private $action;

	/**
	 * createdAt
	 *
	 * @var DateTimeInterface|null
	 */
	private $createdAt;

	/**
	 * metaData
	 *
	 * @var string[]|null
	 */
	private $metaData;

	/**
	 * executions
	 *
	 * @var Execution[]|null
	 */
	private $executions;

	/**
	 * started
	 *
	 * @var DateTimeInterface|null
	 */
	private $started;

	/**
	 * finished
	 *
	 * @var DateTimeInterface|null
	 */
	private $finished;

	/**
	 * successful
	 *
	 * @var bool|null
	 */
	private $successful;


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
	 * @return User|null
	 */
	public function getUser()
	{
		return $this->user;
	}


	/**
	 * user
	 *
	 * @param User|null $user
	 * @return $this
	 */
	public function setUser($user = null): self
	{
		if ($user !== null && !$user instanceof \HipexPackApi\Generated\Schema\Type\User) {
		    $user = new \HipexPackApi\Generated\Schema\Type\User($user);
		}
		$this->user = $user;
		return $this;
	}


	/**
	 * entityType
	 *
	 * @return string
	 */
	public function getEntityType(): string
	{
		return $this->entityType;
	}


	/**
	 * entityType
	 *
	 * @param string $entityType
	 * @return $this
	 */
	public function setEntityType($entityType): self
	{
		$this->entityType = $entityType;
		return $this;
	}


	/**
	 * entityId
	 *
	 * @return int|null
	 */
	public function getEntityId()
	{
		return $this->entityId;
	}


	/**
	 * entityId
	 *
	 * @param int|null $entityId
	 * @return $this
	 */
	public function setEntityId($entityId = null): self
	{
		$this->entityId = $entityId === null ? null : (int) $entityId;
		return $this;
	}


	/**
	 * entityName
	 *
	 * @return string
	 */
	public function getEntityName(): string
	{
		return $this->entityName;
	}


	/**
	 * entityName
	 *
	 * @param string $entityName
	 * @return $this
	 */
	public function setEntityName($entityName): self
	{
		$this->entityName = $entityName;
		return $this;
	}


	/**
	 * action
	 *
	 * @return string
	 */
	public function getAction(): string
	{
		return $this->action;
	}


	/**
	 * action
	 *
	 * @param string $action
	 * @return $this
	 */
	public function setAction($action): self
	{
		$this->action = $action;
		return $this;
	}


	/**
	 * createdAt
	 *
	 * @return DateTimeInterface|null
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}


	/**
	 * createdAt
	 *
	 * @param DateTimeInterface|null $createdAt
	 * @return $this
	 */
	public function setCreatedAt($createdAt = null): self
	{
		if ($createdAt !== null && !$createdAt instanceof DateTimeInterface) {
		    $createdAt = new \DateTimeImmutable($createdAt);
		}
		$this->createdAt = $createdAt;
		return $this;
	}


	/**
	 * metaData
	 *
	 * @return string[]|null
	 */
	public function getMetaData()
	{
		return $this->metaData;
	}


	/**
	 * metaData
	 *
	 * @param string[]|null $metaData
	 * @return $this
	 */
	public function setMetaData($metaData = null): self
	{
		$this->metaData = [];
		if ($metaData === null) return $this;
		foreach ($metaData as $item) {
		    $this->addMetaDataValue($item);
		}
		return $this;
	}


	private function addMetaDataValue($metaData)
	{
		$this->metaData[] = $metaData;
	}


	/**
	 * executions
	 *
	 * @return Execution[]|null
	 */
	public function getExecutions()
	{
		return $this->executions;
	}


	/**
	 * executions
	 *
	 * @param Execution[]|null $executions
	 * @return $this
	 */
	public function setExecutions($executions = null): self
	{
		$this->executions = [];
		if ($executions === null) return $this;
		foreach ($executions as $item) {
		    $this->addExecutionsValue($item);
		}
		return $this;
	}


	private function addExecutionsValue($executions)
	{
		if ($executions !== null && !$executions instanceof \HipexPackApi\Generated\Schema\Type\Execution) {
		    $executions = new \HipexPackApi\Generated\Schema\Type\Execution($executions);
		}
		$this->executions[] = $executions;
	}


	/**
	 * started
	 *
	 * @return DateTimeInterface|null
	 */
	public function getStarted()
	{
		return $this->started;
	}


	/**
	 * started
	 *
	 * @param DateTimeInterface|null $started
	 * @return $this
	 */
	public function setStarted($started = null): self
	{
		if ($started !== null && !$started instanceof DateTimeInterface) {
		    $started = new \DateTimeImmutable($started);
		}
		$this->started = $started;
		return $this;
	}


	/**
	 * finished
	 *
	 * @return DateTimeInterface|null
	 */
	public function getFinished()
	{
		return $this->finished;
	}


	/**
	 * finished
	 *
	 * @param DateTimeInterface|null $finished
	 * @return $this
	 */
	public function setFinished($finished = null): self
	{
		if ($finished !== null && !$finished instanceof DateTimeInterface) {
		    $finished = new \DateTimeImmutable($finished);
		}
		$this->finished = $finished;
		return $this;
	}


	/**
	 * successful
	 *
	 * @return bool|null
	 */
	public function getSuccessful()
	{
		return $this->successful;
	}


	/**
	 * successful
	 *
	 * @param bool|null $successful
	 * @return $this
	 */
	public function setSuccessful($successful = null): self
	{
		$this->successful = $successful === null ? null : (bool) $successful;
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
		if ($this->entityType !== null) $result['entityType'] = $this->entityType;
		if ($this->entityId !== null) $result['entityId'] = $this->entityId;
		if ($this->entityName !== null) $result['entityName'] = $this->entityName;
		if ($this->action !== null) $result['action'] = $this->action;
		if ($this->createdAt !== null) $result['createdAt'] = $this->createdAt;
		if ($this->metaData !== null) $result['metaData'] = $this->metaData;
		if ($this->executions !== null) $result['executions'] = $this->executions;
		if ($this->started !== null) $result['started'] = $this->started;
		if ($this->finished !== null) $result['finished'] = $this->finished;
		if ($this->successful !== null) $result['successful'] = $this->successful;
		return $result;
	}
}
