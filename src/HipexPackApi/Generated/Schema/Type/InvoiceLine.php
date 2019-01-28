<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-19
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * @codeCoverageIgnore
 */
class InvoiceLine extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * startDate
	 *
	 * @var DateTimeInterface|null
	 */
	private $startDate;

	/**
	 * endDate
	 *
	 * @var DateTimeInterface|null
	 */
	private $endDate;

	/**
	 * description
	 *
	 * @var string|null
	 */
	private $description;

	/**
	 * amount
	 *
	 * @var int|null
	 */
	private $amount;

	/**
	 * price
	 *
	 * @var float|null
	 */
	private $price;


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
	 * startDate
	 *
	 * @return DateTimeInterface|null
	 */
	public function getStartDate()
	{
		return $this->startDate;
	}


	/**
	 * startDate
	 *
	 * @param DateTimeInterface|null $startDate
	 * @return $this
	 */
	public function setStartDate($startDate = null): self
	{
		if ($startDate !== null && !$startDate instanceof DateTimeInterface) {
		    $startDate = new \DateTimeImmutable($startDate);
		}
		$this->startDate = $startDate;
		return $this;
	}


	/**
	 * endDate
	 *
	 * @return DateTimeInterface|null
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}


	/**
	 * endDate
	 *
	 * @param DateTimeInterface|null $endDate
	 * @return $this
	 */
	public function setEndDate($endDate = null): self
	{
		if ($endDate !== null && !$endDate instanceof DateTimeInterface) {
		    $endDate = new \DateTimeImmutable($endDate);
		}
		$this->endDate = $endDate;
		return $this;
	}


	/**
	 * description
	 *
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}


	/**
	 * description
	 *
	 * @param string|null $description
	 * @return $this
	 */
	public function setDescription($description = null): self
	{
		$this->description = $description === null ? null : (string) $description;
		return $this;
	}


	/**
	 * amount
	 *
	 * @return int|null
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * amount
	 *
	 * @param int|null $amount
	 * @return $this
	 */
	public function setAmount($amount = null): self
	{
		$this->amount = $amount === null ? null : (int) $amount;
		return $this;
	}


	/**
	 * price
	 *
	 * @return float|null
	 */
	public function getPrice()
	{
		return $this->price;
	}


	/**
	 * price
	 *
	 * @param float|null $price
	 * @return $this
	 */
	public function setPrice($price = null): self
	{
		$this->price = $price === null ? null : (float) $price;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->startDate !== null) $result['startDate'] = $this->startDate;
		if ($this->endDate !== null) $result['endDate'] = $this->endDate;
		if ($this->description !== null) $result['description'] = $this->description;
		if ($this->amount !== null) $result['amount'] = $this->amount;
		if ($this->price !== null) $result['price'] = $this->price;
		return $result;
	}
}
