<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Step in integrationtest entity.
 * @codeCoverageIgnore
 */
class StepType extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int
	 */
	private $id;

	/**
	 * test
	 *
	 * @var IntegrationTest|null
	 */
	private $test;

	/**
	 * url
	 *
	 * @var string|null
	 */
	private $url;

	/**
	 * started
	 *
	 * @var DateTimeInterface|null
	 */
	private $started;

	/**
	 * timeSpend
	 *
	 * @var float|null
	 */
	private $timeSpend;

	/**
	 * status
	 *
	 * @var string|null
	 */
	private $status;

	/**
	 * result
	 *
	 * @var string|null
	 */
	private $result;

	/**
	 * screenShotPath
	 *
	 * @var string|null
	 */
	private $screenShotPath;


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
	 * test
	 *
	 * @return IntegrationTest|null
	 */
	public function getTest()
	{
		return $this->test;
	}


	/**
	 * test
	 *
	 * @param IntegrationTest|null $test
	 * @return $this
	 */
	public function setTest($test = null): self
	{
		if ($test !== null && !$test instanceof \HipexPackApi\Generated\Schema\Type\IntegrationTest) {
		    $test = new \HipexPackApi\Generated\Schema\Type\IntegrationTest($test);
		}
		$this->test = $test;
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
	 * timeSpend
	 *
	 * @return float|null
	 */
	public function getTimeSpend()
	{
		return $this->timeSpend;
	}


	/**
	 * timeSpend
	 *
	 * @param float|null $timeSpend
	 * @return $this
	 */
	public function setTimeSpend($timeSpend = null): self
	{
		$this->timeSpend = $timeSpend === null ? null : (float) $timeSpend;
		return $this;
	}


	/**
	 * status
	 *
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}


	/**
	 * status
	 *
	 * @param string|null $status
	 * @return $this
	 */
	public function setStatus($status = null): self
	{
		$this->status = $status === null ? null : (string) $status;
		return $this;
	}


	/**
	 * result
	 *
	 * @return string|null
	 */
	public function getResult()
	{
		return $this->result;
	}


	/**
	 * result
	 *
	 * @param string|null $result
	 * @return $this
	 */
	public function setResult($result = null): self
	{
		$this->result = $result === null ? null : (string) $result;
		return $this;
	}


	/**
	 * screenShotPath
	 *
	 * @return string|null
	 */
	public function getScreenShotPath()
	{
		return $this->screenShotPath;
	}


	/**
	 * screenShotPath
	 *
	 * @param string|null $screenShotPath
	 * @return $this
	 */
	public function setScreenShotPath($screenShotPath = null): self
	{
		$this->screenShotPath = $screenShotPath === null ? null : (string) $screenShotPath;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->test !== null) $result['test'] = $this->test;
		if ($this->url !== null) $result['url'] = $this->url;
		if ($this->started !== null) $result['started'] = $this->started;
		if ($this->timeSpend !== null) $result['timeSpend'] = $this->timeSpend;
		if ($this->status !== null) $result['status'] = $this->status;
		if ($this->result !== null) $result['result'] = $this->result;
		if ($this->screenShotPath !== null) $result['screenShotPath'] = $this->screenShotPath;
		return $result;
	}
}
