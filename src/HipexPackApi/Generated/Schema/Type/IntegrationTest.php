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
 * Integration test result entity.
 * @codeCoverageIgnore
 */
class IntegrationTest extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * finished
	 *
	 * @var DateTimeInterface|null
	 */
	private $finished;

	/**
	 * maxRequestTime
	 *
	 * @var int|null
	 */
	private $maxRequestTime;

	/**
	 * previousTest
	 *
	 * @var IntegrationTest|null
	 */
	private $previousTest;

	/**
	 * domain
	 *
	 * @var Domain|null
	 */
	private $domain;

	/**
	 * totalTime
	 *
	 * @var float|null
	 */
	private $totalTime;

	/**
	 * steps
	 *
	 * @var StepType[]|null
	 */
	private $steps;

	/**
	 * schedule
	 *
	 * @var ScheduleType|null
	 */
	private $schedule;


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
	 * name
	 *
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}


	/**
	 * name
	 *
	 * @param string|null $name
	 * @return $this
	 */
	public function setName($name = null): self
	{
		$this->name = $name === null ? null : (string) $name;
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
	 * maxRequestTime
	 *
	 * @return int|null
	 */
	public function getMaxRequestTime()
	{
		return $this->maxRequestTime;
	}


	/**
	 * maxRequestTime
	 *
	 * @param int|null $maxRequestTime
	 * @return $this
	 */
	public function setMaxRequestTime($maxRequestTime = null): self
	{
		$this->maxRequestTime = $maxRequestTime === null ? null : (int) $maxRequestTime;
		return $this;
	}


	/**
	 * previousTest
	 *
	 * @return IntegrationTest|null
	 */
	public function getPreviousTest()
	{
		return $this->previousTest;
	}


	/**
	 * previousTest
	 *
	 * @param IntegrationTest|null $previousTest
	 * @return $this
	 */
	public function setPreviousTest($previousTest = null): self
	{
		if ($previousTest !== null && !$previousTest instanceof \HipexPackApi\Generated\Schema\Type\IntegrationTest) {
		    $previousTest = new \HipexPackApi\Generated\Schema\Type\IntegrationTest($previousTest);
		}
		$this->previousTest = $previousTest;
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
	 * totalTime
	 *
	 * @return float|null
	 */
	public function getTotalTime()
	{
		return $this->totalTime;
	}


	/**
	 * totalTime
	 *
	 * @param float|null $totalTime
	 * @return $this
	 */
	public function setTotalTime($totalTime = null): self
	{
		$this->totalTime = $totalTime === null ? null : (float) $totalTime;
		return $this;
	}


	/**
	 * steps
	 *
	 * @return StepType[]|null
	 */
	public function getSteps()
	{
		return $this->steps;
	}


	/**
	 * steps
	 *
	 * @param StepType[]|null $steps
	 * @return $this
	 */
	public function setSteps($steps = null): self
	{
		$this->steps = [];
		if ($steps === null) return $this;
		foreach ($steps as $item) {
		    $this->addStepsValue($item);
		}
		return $this;
	}


	private function addStepsValue($steps)
	{
		if ($steps !== null && !$steps instanceof \HipexPackApi\Generated\Schema\Type\StepType) {
		    $steps = new \HipexPackApi\Generated\Schema\Type\StepType($steps);
		}
		$this->steps[] = $steps;
	}


	/**
	 * schedule
	 *
	 * @return ScheduleType|null
	 */
	public function getSchedule()
	{
		return $this->schedule;
	}


	/**
	 * schedule
	 *
	 * @param ScheduleType|null $schedule
	 * @return $this
	 */
	public function setSchedule($schedule = null): self
	{
		if ($schedule !== null && !$schedule instanceof \HipexPackApi\Generated\Schema\Type\ScheduleType) {
		    $schedule = new \HipexPackApi\Generated\Schema\Type\ScheduleType($schedule);
		}
		$this->schedule = $schedule;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->finished !== null) $result['finished'] = $this->finished;
		if ($this->maxRequestTime !== null) $result['maxRequestTime'] = $this->maxRequestTime;
		if ($this->previousTest !== null) $result['previousTest'] = $this->previousTest;
		if ($this->domain !== null) $result['domain'] = $this->domain;
		if ($this->totalTime !== null) $result['totalTime'] = $this->totalTime;
		if ($this->steps !== null) $result['steps'] = $this->steps;
		if ($this->schedule !== null) $result['schedule'] = $this->schedule;
		return $result;
	}
}
