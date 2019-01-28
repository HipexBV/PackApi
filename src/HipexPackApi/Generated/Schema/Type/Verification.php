<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-19
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * @codeCoverageIgnore
 */
class Verification extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * success
	 *
	 * @var bool|null
	 */
	private $success;

	/**
	 * message
	 *
	 * @var string|null
	 */
	private $message;


	/**
	 * success
	 *
	 * @return bool|null
	 */
	public function getSuccess()
	{
		return $this->success;
	}


	/**
	 * success
	 *
	 * @param bool|null $success
	 * @return $this
	 */
	public function setSuccess($success = null): self
	{
		$this->success = $success === null ? null : (bool) $success;
		return $this;
	}


	/**
	 * message
	 *
	 * @return string|null
	 */
	public function getMessage()
	{
		return $this->message;
	}


	/**
	 * message
	 *
	 * @param string|null $message
	 * @return $this
	 */
	public function setMessage($message = null): self
	{
		$this->message = $message === null ? null : (string) $message;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->success !== null) $result['success'] = $this->success;
		if ($this->message !== null) $result['message'] = $this->message;
		return $result;
	}
}
