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
 * Authenticated user with authentication result for login mutation.
 * @codeCoverageIgnore
 */
class Authentication extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * success
	 *
	 * @var bool|null
	 */
	private $success;

	/**
	 * errorMessage
	 *
	 * @var string|null
	 */
	private $errorMessage;

	/**
	 * errorMessageId
	 *
	 * @var string|null
	 */
	private $errorMessageId;

	/**
	 * email
	 *
	 * @var string|null
	 */
	private $email;

	/**
	 * name
	 *
	 * @var string|null
	 */
	private $name;

	/**
	 * settings
	 *
	 * @var KeyValue[]|null
	 */
	private $settings;


	/**
	 * id
	 *
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}


	/**
	 * id
	 *
	 * @param int|null $id
	 * @return $this
	 */
	public function setId($id = null): self
	{
		$this->id = $id;
		return $this;
	}


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
		$this->success = $success;
		return $this;
	}


	/**
	 * errorMessage
	 *
	 * @return string|null
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}


	/**
	 * errorMessage
	 *
	 * @param string|null $errorMessage
	 * @return $this
	 */
	public function setErrorMessage($errorMessage = null): self
	{
		$this->errorMessage = $errorMessage;
		return $this;
	}


	/**
	 * errorMessageId
	 *
	 * @return string|null
	 */
	public function getErrorMessageId()
	{
		return $this->errorMessageId;
	}


	/**
	 * errorMessageId
	 *
	 * @param string|null $errorMessageId
	 * @return $this
	 */
	public function setErrorMessageId($errorMessageId = null): self
	{
		$this->errorMessageId = $errorMessageId;
		return $this;
	}


	/**
	 * email
	 *
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}


	/**
	 * email
	 *
	 * @param string|null $email
	 * @return $this
	 */
	public function setEmail($email = null): self
	{
		$this->email = $email;
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
		$this->name = $name;
		return $this;
	}


	/**
	 * settings
	 *
	 * @return KeyValue[]|null
	 */
	public function getSettings()
	{
		return $this->settings;
	}


	/**
	 * settings
	 *
	 * @param KeyValue[]|null $settings
	 * @return $this
	 */
	public function setSettings($settings = null): self
	{
		$this->settings = [];
		foreach ($settings as $item) {
		    $this->addSettingsValue($item);
		}
		return $this;
	}


	private function addSettingsValue($settings)
	{
		if ($settings !== null && !$settings instanceof \HipexPackApi\Generated\Schema\Type\KeyValue) {
		    $settings = new \HipexPackApi\Generated\Schema\Type\KeyValue($settings);
		}
		$this->settings[] = $settings;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'id' => $this->id,
		    'success' => $this->success,
		    'errorMessage' => $this->errorMessage,
		    'errorMessageId' => $this->errorMessageId,
		    'email' => $this->email,
		    'name' => $this->name,
		    'settings' => $this->settings,
		];
	}
}
