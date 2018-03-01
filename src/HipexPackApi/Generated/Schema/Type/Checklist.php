<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTime;
use JsonSerializable;

/**
 * Checklist for, minor, major and critical errors of your domain.
 * @codeCoverageIgnore
 */
class Checklist extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * domain
	 *
	 * @var Domain|null
	 */
	private $domain;

	/**
	 * applicationInfo
	 *
	 * @var ApplicationInfo|null
	 */
	private $applicationInfo;

	/**
	 * error
	 *
	 * @var string|null
	 */
	private $error;

	/**
	 * finished
	 *
	 * @var DateTime|null
	 */
	private $finished;

	/**
	 * groups
	 *
	 * @var GroupType[]|null
	 */
	private $groups;

	/**
	 * status
	 *
	 * @var ResultTypeEnum|null
	 */
	private $status;


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
	 * applicationInfo
	 *
	 * @return ApplicationInfo|null
	 */
	public function getApplicationInfo()
	{
		return $this->applicationInfo;
	}


	/**
	 * applicationInfo
	 *
	 * @param ApplicationInfo|null $applicationInfo
	 * @return $this
	 */
	public function setApplicationInfo($applicationInfo = null): self
	{
		if ($applicationInfo !== null && !$applicationInfo instanceof \HipexPackApi\Generated\Schema\Type\ApplicationInfo) {
		    $applicationInfo = new \HipexPackApi\Generated\Schema\Type\ApplicationInfo($applicationInfo);
		}
		$this->applicationInfo = $applicationInfo;
		return $this;
	}


	/**
	 * error
	 *
	 * @return string|null
	 */
	public function getError()
	{
		return $this->error;
	}


	/**
	 * error
	 *
	 * @param string|null $error
	 * @return $this
	 */
	public function setError($error = null): self
	{
		$this->error = $error;
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
		$this->finished = $finished;
		return $this;
	}


	/**
	 * groups
	 *
	 * @return GroupType[]|null
	 */
	public function getGroups()
	{
		return $this->groups;
	}


	/**
	 * groups
	 *
	 * @param GroupType[]|null $groups
	 * @return $this
	 */
	public function setGroups($groups = null): self
	{
		$this->groups = [];
		foreach ($groups as $item) {
		    $this->addGroupsValue($item);
		}
		return $this;
	}


	private function addGroupsValue($groups)
	{
		if ($groups !== null && !$groups instanceof \HipexPackApi\Generated\Schema\Type\GroupType) {
		    $groups = new \HipexPackApi\Generated\Schema\Type\GroupType($groups);
		}
		$this->groups[] = $groups;
	}


	/**
	 * status
	 *
	 * @return ResultTypeEnum|null
	 */
	public function getStatus()
	{
		return $this->status;
	}


	/**
	 * status
	 *
	 * @param ResultTypeEnum|null $status
	 * @return $this
	 */
	public function setStatus($status = null): self
	{
		$this->status = $status;
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
		    'applicationInfo' => $this->applicationInfo,
		    'error' => $this->error,
		    'finished' => $this->finished,
		    'groups' => $this->groups,
		    'status' => $this->status,
		];
	}
}
