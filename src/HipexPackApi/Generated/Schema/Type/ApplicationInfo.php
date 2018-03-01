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
 * Domain application info.
 * @codeCoverageIgnore
 */
class ApplicationInfo extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * type
	 *
	 * @var string
	 */
	private $type;

	/**
	 * version
	 *
	 * @var string|null
	 */
	private $version;

	/**
	 * latestVersion
	 *
	 * @var string|null
	 */
	private $latestVersion;

	/**
	 * url
	 *
	 * @var string|null
	 */
	private $url;


	/**
	 * type
	 *
	 * @return string
	 */
	public function getType(): string
	{
		return $this->type;
	}


	/**
	 * type
	 *
	 * @param string $type
	 * @return $this
	 */
	public function setType($type): self
	{
		$this->type = $type;
		return $this;
	}


	/**
	 * version
	 *
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->version;
	}


	/**
	 * version
	 *
	 * @param string|null $version
	 * @return $this
	 */
	public function setVersion($version = null): self
	{
		$this->version = $version;
		return $this;
	}


	/**
	 * latestVersion
	 *
	 * @return string|null
	 */
	public function getLatestVersion()
	{
		return $this->latestVersion;
	}


	/**
	 * latestVersion
	 *
	 * @param string|null $latestVersion
	 * @return $this
	 */
	public function setLatestVersion($latestVersion = null): self
	{
		$this->latestVersion = $latestVersion;
		return $this;
	}


	/**
	 * url
	 *
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}


	/**
	 * url
	 *
	 * @param string|null $url
	 * @return $this
	 */
	public function setUrl($url = null): self
	{
		$this->url = $url;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'type' => $this->type,
		    'version' => $this->version,
		    'latestVersion' => $this->latestVersion,
		    'url' => $this->url,
		];
	}
}
