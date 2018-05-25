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
	 * @var DateTime|null
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
		$this->url = $url;
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
		$this->timeSpend = $timeSpend;
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
		$this->status = $status;
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
		$this->result = $result;
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
		$this->screenShotPath = $screenShotPath;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'test' => $this->test,
		    'url' => $this->url,
		    'started' => $this->started,
		    'timeSpend' => $this->timeSpend,
		    'status' => $this->status,
		    'result' => $this->result,
		    'screenShotPath' => $this->screenShotPath,
		];
	}
}
