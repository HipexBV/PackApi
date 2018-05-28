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
 * Execution step
 * @codeCoverageIgnore
 */
class Execution_step extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
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
	 * finished
	 *
	 * @var DateTime|null
	 */
	private $finished;

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
		return [
		    'message' => $this->message,
		    'messageArguments' => $this->messageArguments,
		    'finished' => $this->finished,
		    'successful' => $this->successful,
		];
	}
}
