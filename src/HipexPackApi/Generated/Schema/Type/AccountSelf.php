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
 * Account User entity
 * @codeCoverageIgnore
 */
class AccountSelf extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * email
	 *
	 * @var string|null
	 */
	private $email;

	/**
	 * locale
	 *
	 * @var string|null
	 */
	private $locale;


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
		$this->locale = $locale === null ? null : (string) $locale;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->email !== null) $result['email'] = $this->email;
		if ($this->locale !== null) $result['locale'] = $this->locale;
		return $result;
	}
}
