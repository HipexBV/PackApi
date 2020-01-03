<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use JsonSerializable;

/**
 * Validation step entity.
 * @codeCoverageIgnore
 */
class ValidationStep extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * successful
	 *
	 * @var bool|null
	 */
	private $successful;

	/**
	 * message
	 *
	 * @var string|null
	 */
	private $message;

	/**
	 * messageArguments
	 *
	 * @var string[]|null
	 */
	private $messageArguments;


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
	 * messageArguments
	 *
	 * @return string[]|null
	 */
	public function getMessageArguments()
	{
		return $this->messageArguments;
	}


	/**
	 * messageArguments
	 *
	 * @param string[]|null $messageArguments
	 * @return $this
	 */
	public function setMessageArguments($messageArguments = null): self
	{
		$this->messageArguments = [];
		if ($messageArguments === null) return $this;
		foreach ($messageArguments as $item) {
		    $this->addMessageArgumentsValue($item);
		}
		return $this;
	}


	private function addMessageArgumentsValue($messageArguments)
	{
		$this->messageArguments[] = $messageArguments;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->successful !== null) $result['successful'] = $this->successful;
		if ($this->message !== null) $result['message'] = $this->message;
		if ($this->messageArguments !== null) $result['messageArguments'] = $this->messageArguments;
		return $result;
	}
}
