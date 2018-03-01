<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTime;
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
	 * @var FileTypeEnum
	 */
	private $type;

	/**
	 * modifiedTime
	 *
	 * @var DateTime
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
	 * @return FileTypeEnum
	 */
	public function getType(): FileTypeEnum
	{
		return $this->type;
	}


	/**
	 * type
	 *
	 * @param FileTypeEnum $type
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
	 * @return DateTime
	 */
	public function getModifiedTime(): DateTime
	{
		return $this->modifiedTime;
	}


	/**
	 * modifiedTime
	 *
	 * @param DateTime $modifiedTime
	 * @return $this
	 */
	public function setModifiedTime($modifiedTime): self
	{
		$this->modifiedTime = $modifiedTime;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		return [
		    'path' => $this->path,
		    'size' => $this->size,
		    'type' => $this->type,
		    'modifiedTime' => $this->modifiedTime,
		];
	}
}
