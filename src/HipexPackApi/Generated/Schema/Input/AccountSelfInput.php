<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Account User.
 * @codeCoverageIgnore
 */
class AccountSelfInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * email
	 *
	 * @var string|null
	 */
	private $email;

	/**
	 * currentPassword
	 *
	 * @var string|null
	 */
	private $currentPassword;

	/**
	 * newPassword
	 *
	 * @var string|null
	 */
	private $newPassword;

	/**
	 * confirmNewPassword
	 *
	 * @var string|null
	 */
	private $confirmNewPassword;

	/**
	 * locale
	 *
	 * @var string|null
	 */
	private $locale;


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
	 * currentPassword
	 *
	 * @return string|null
	 */
	public function getCurrentPassword()
	{
		return $this->currentPassword;
	}


	/**
	 * currentPassword
	 *
	 * @param string|null $currentPassword
	 * @return $this
	 */
	public function setCurrentPassword($currentPassword = null): self
	{
		$this->currentPassword = $currentPassword === null ? null : (string) $currentPassword;
		return $this;
	}


	/**
	 * newPassword
	 *
	 * @return string|null
	 */
	public function getNewPassword()
	{
		return $this->newPassword;
	}


	/**
	 * newPassword
	 *
	 * @param string|null $newPassword
	 * @return $this
	 */
	public function setNewPassword($newPassword = null): self
	{
		$this->newPassword = $newPassword === null ? null : (string) $newPassword;
		return $this;
	}


	/**
	 * confirmNewPassword
	 *
	 * @return string|null
	 */
	public function getConfirmNewPassword()
	{
		return $this->confirmNewPassword;
	}


	/**
	 * confirmNewPassword
	 *
	 * @param string|null $confirmNewPassword
	 * @return $this
	 */
	public function setConfirmNewPassword($confirmNewPassword = null): self
	{
		$this->confirmNewPassword = $confirmNewPassword === null ? null : (string) $confirmNewPassword;
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
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->email !== null) $result['email'] = $this->email;
		if ($this->currentPassword !== null) $result['currentPassword'] = $this->currentPassword;
		if ($this->newPassword !== null) $result['newPassword'] = $this->newPassword;
		if ($this->confirmNewPassword !== null) $result['confirmNewPassword'] = $this->confirmNewPassword;
		if ($this->locale !== null) $result['locale'] = $this->locale;
		return $result;
	}
}
