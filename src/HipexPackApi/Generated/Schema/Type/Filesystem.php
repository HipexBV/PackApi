<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Filesystem objects: folders, files or symlinks
 * @codeCoverageIgnore
 */
class Filesystem extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * path
	 *
	 * @var string
	 */
	private $path;

	/**
	 * size
	 *
	 * @var int
	 */
	private $size;

	/**
	 * type
	 *
	 * @var string
	 */
	private $type;

	/**
	 * modifiedTime
	 *
	 * @var DateTimeInterface
	 */
	private $modifiedTime;


	/**
	 * path
	 *
	 * @return string
	 */
	public function getPath(): string
	{
		return $this->path;
	}


	/**
	 * path
	 *
	 * @param string $path
	 * @return $this
	 */
	public function setPath($path): self
	{
		$this->path = $path;
		return $this;
	}


	/**
	 * size
	 *
	 * @return int
	 */
	public function getSize(): int
	{
		return $this->size;
	}


	/**
	 * size
	 *
	 * @param int $size
	 * @return $this
	 */
	public function setSize($size): self
	{
		$this->size = $size;
		return $this;
	}


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
	 * modifiedTime
	 *
	 * @return DateTimeInterface
	 */
	public function getModifiedTime(): DateTimeInterface
	{
		return $this->modifiedTime;
	}


	/**
	 * modifiedTime
	 *
	 * @param DateTimeInterface $modifiedTime
	 * @return $this
	 */
	public function setModifiedTime($modifiedTime): self
	{
		if ($modifiedTime !== null && !$modifiedTime instanceof DateTimeInterface) {
		    $modifiedTime = new \DateTimeImmutable($modifiedTime);
		}
		$this->modifiedTime = $modifiedTime;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->path !== null) $result['path'] = $this->path;
		if ($this->size !== null) $result['size'] = $this->size;
		if ($this->type !== null) $result['type'] = $this->type;
		if ($this->modifiedTime !== null) $result['modifiedTime'] = $this->modifiedTime;
		return $result;
	}
}
