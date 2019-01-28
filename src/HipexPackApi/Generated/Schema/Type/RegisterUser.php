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
 * Register new Pack application user
 * @codeCoverageIgnore
 */
class RegisterUser extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * email
	 *
	 * @var string|null
	 */
	private $email;

	/**
	 * display_name
	 *
	 * @var string|null
	 */
	private $display_name;


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
	 * display_name
	 *
	 * @return string|null
	 */
	public function getDisplay_name()
	{
		return $this->display_name;
	}


	/**
	 * display_name
	 *
	 * @param string|null $display_name
	 * @return $this
	 */
	public function setDisplay_name($display_name = null): self
	{
		$this->display_name = $display_name === null ? null : (string) $display_name;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->email !== null) $result['email'] = $this->email;
		if ($this->display_name !== null) $result['display_name'] = $this->display_name;
		return $result;
	}
}
