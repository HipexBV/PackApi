<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * Check in checklist.
 * @codeCoverageIgnore
 */
class CheckType extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * tooltip
	 *
	 * @var string|null
	 */
	private $tooltip;

	/**
	 * title
	 *
	 * @var string|null
	 */
	private $title;

	/**
	 * status
	 *
	 * @var string|null
	 */
	private $status;

	/**
	 * statusLevel
	 *
	 * @var int|null
	 */
	private $statusLevel;

	/**
	 * error
	 *
	 * @var string|null
	 */
	private $error;


	/**
	 * tooltip
	 *
	 * @return string|null
	 */
	public function getTooltip()
	{
		return $this->tooltip;
	}


	/**
	 * tooltip
	 *
	 * @param string|null $tooltip
	 * @return $this
	 */
	public function setTooltip($tooltip = null): self
	{
		$this->tooltip = $tooltip === null ? null : (string) $tooltip;
		return $this;
	}


	/**
	 * title
	 *
	 * @return string|null
	 */
	public function getTitle()
	{
		return $this->title;
	}


	/**
	 * title
	 *
	 * @param string|null $title
	 * @return $this
	 */
	public function setTitle($title = null): self
	{
		$this->title = $title === null ? null : (string) $title;
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
	 * statusLevel
	 *
	 * @return int|null
	 */
	public function getStatusLevel()
	{
		return $this->statusLevel;
	}


	/**
	 * statusLevel
	 *
	 * @param int|null $statusLevel
	 * @return $this
	 */
	public function setStatusLevel($statusLevel = null): self
	{
		$this->statusLevel = $statusLevel === null ? null : (int) $statusLevel;
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
		$this->error = $error === null ? null : (string) $error;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->tooltip !== null) $result['tooltip'] = $this->tooltip;
		if ($this->title !== null) $result['title'] = $this->title;
		if ($this->status !== null) $result['status'] = $this->status;
		if ($this->statusLevel !== null) $result['statusLevel'] = $this->statusLevel;
		if ($this->error !== null) $result['error'] = $this->error;
		return $result;
	}
}
