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
 * LetsEncrypt validation step.
 * @codeCoverageIgnore
 */
class LetsEncryptValidationStep extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * message
	 *
	 * @var string|null
	 */
	private $message;

	/**
	 * successful
	 *
	 * @var bool|null
	 */
	private $successful;


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
		if ($this->message !== null) $result['message'] = $this->message;
		if ($this->successful !== null) $result['successful'] = $this->successful;
		return $result;
	}
}
