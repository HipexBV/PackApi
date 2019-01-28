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
	 * locale
	 *
	 * @var string|null
	 */
	private $locale;

	/**
	 * settings
	 *
	 * @var KeyValue[]|null
	 */
	private $settings;

	/**
	 * kayakoJwt
	 *
	 * @var string|null
	 */
	private $kayakoJwt;


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
		$this->id = $id === null ? null : (int) $id;
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
		$this->success = $success === null ? null : (bool) $success;
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
		$this->errorMessage = $errorMessage === null ? null : (string) $errorMessage;
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
		$this->errorMessageId = $errorMessageId === null ? null : (string) $errorMessageId;
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
		$this->email = $email === null ? null : (string) $email;
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
	 * locale
	 *
	 * @return string|null
	 */
	public function getLocale()
	{
		return $this->locale;
	}


	/**
	 * locale
	 *
	 * @param string|null $locale
	 * @return $this
	 */
	public function setLocale($locale = null): self
	{
		$this->locale = $locale;
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
		if ($settings === null) return $this;
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
	 * kayakoJwt
	 *
	 * @return string|null
	 */
	public function getKayakoJwt()
	{
		return $this->kayakoJwt;
	}


	/**
	 * kayakoJwt
	 *
	 * @param string|null $kayakoJwt
	 * @return $this
	 */
	public function setKayakoJwt($kayakoJwt = null): self
	{
		$this->kayakoJwt = $kayakoJwt === null ? null : (string) $kayakoJwt;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->success !== null) $result['success'] = $this->success;
		if ($this->errorMessage !== null) $result['errorMessage'] = $this->errorMessage;
		if ($this->errorMessageId !== null) $result['errorMessageId'] = $this->errorMessageId;
		if ($this->email !== null) $result['email'] = $this->email;
		if ($this->name !== null) $result['name'] = $this->name;
		if ($this->locale !== null) $result['locale'] = $this->locale;
		if ($this->settings !== null) $result['settings'] = $this->settings;
		if ($this->kayakoJwt !== null) $result['kayakoJwt'] = $this->kayakoJwt;
		return $result;
	}
}
