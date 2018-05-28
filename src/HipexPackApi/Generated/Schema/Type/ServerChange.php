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
	 * customer
	 *
	 * @var Customer|null
	 */
	private $customer;

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
	 * started
	 *
	 * @var DateTime|null
	 */
	private $started;

	/**
	 * finished
	 *
	 * @var DateTime|null
	 */
	private $finished;

	/**
	 * executor
	 *
	 * @var string|null
	 */
	private $executor;

	/**
	 * metaData
	 *
	 * @var string[]|null
	 */
	private $metaData;

	/**
	 * failed
	 *
	 * @var string|null
	 */
	private $failed;

	/**
	 * executions
	 *
	 * @var Execution[]|null
	 */
	private $executions;


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
	 * customer
	 *
	 * @return Customer|null
	 */
	public function getCustomer()
	{
		return $this->customer;
	}


	/**
	 * customer
	 *
	 * @param Customer|null $customer
	 * @return $this
	 */
	public function setCustomer($customer = null): self
	{
		if ($customer !== null && !$customer instanceof \HipexPackApi\Generated\Schema\Type\Customer) {
		    $customer = new \HipexPackApi\Generated\Schema\Type\Customer($customer);
		}
		$this->customer = $customer;
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
	 * started
	 *
	 * @return DateTime|null
	 */
	public function getStarted()
	{
		return $this->started;
	}


	/**
	 * started
	 *
	 * @param DateTime|null $started
	 * @return $this
	 */
	public function setStarted($started = null): self
	{
		$this->started = $started === null ? null : (DateTime) $started;
		return $this;
	}


	/**
	 * finished
	 *
	 * @return DateTime|null
	 */
	public function getFinished()
	{
		return $this->finished;
	}


	/**
	 * finished
	 *
	 * @param DateTime|null $finished
	 * @return $this
	 */
	public function setFinished($finished = null): self
	{
		$this->finished = $finished === null ? null : (DateTime) $finished;
		return $this;
	}


	/**
	 * executor
	 *
	 * @return string|null
	 */
	public function getExecutor()
	{
		return $this->executor;
	}


	/**
	 * executor
	 *
	 * @param string|null $executor
	 * @return $this
	 */
	public function setExecutor($executor = null): self
	{
		$this->executor = $executor === null ? null : (string) $executor;
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
	 * failed
	 *
	 * @return string|null
	 */
	public function getFailed()
	{
		return $this->failed;
	}


	/**
	 * failed
	 *
	 * @param string|null $failed
	 * @return $this
	 */
	public function setFailed($failed = null): self
	{
		$this->failed = $failed === null ? null : (string) $failed;
		return $this;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'user' => $this->user,
		    'customer' => $this->customer,
		    'entityType' => $this->entityType,
		    'entityId' => $this->entityId,
		    'entityName' => $this->entityName,
		    'action' => $this->action,
		    'started' => $this->started,
		    'finished' => $this->finished,
		    'executor' => $this->executor,
		    'metaData' => $this->metaData,
		    'failed' => $this->failed,
		    'executions' => $this->executions,
		];
	}
}
