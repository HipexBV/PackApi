<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Start new checklist by domain ID
 * @codeCoverageIgnore
 */
class ChecklistStartInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * domainId
	 *
	 * @var int
	 */
	private $domainId;

	/**
	 * groupsToRun
	 *
	 * @var string[]|null
	 */
	private $groupsToRun;


	/**
	 * domainId
	 *
	 * @return int
	 */
	public function getDomainId(): int
	{
		return $this->domainId;
	}


	/**
	 * domainId
	 *
	 * @param int $domainId
	 * @return $this
	 */
	public function setDomainId($domainId): self
	{
		$this->domainId = $domainId;
		return $this;
	}


	/**
	 * groupsToRun
	 *
	 * @return string[]|null
	 */
	public function getGroupsToRun()
	{
		return $this->groupsToRun;
	}


	/**
	 * groupsToRun
	 *
	 * @param string[]|null $groupsToRun
	 * @return $this
	 */
	public function setGroupsToRun($groupsToRun = null): self
	{
		$this->groupsToRun = [];
		if ($groupsToRun === null) return $this;
		foreach ($groupsToRun as $item) {
		    $this->addGroupsToRunValue($item);
		}
		return $this;
	}


	private function addGroupsToRunValue($groupsToRun)
	{
		$this->groupsToRun[] = $groupsToRun;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->domainId !== null) $result['domainId'] = $this->domainId;
		if ($this->groupsToRun !== null) $result['groupsToRun'] = $this->groupsToRun;
		return $result;
	}
}
