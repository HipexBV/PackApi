<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;

/**
 * Invoices user connected customers
 * @codeCoverageIgnore
 */
class Invoice extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * id
	 *
	 * @var int|null
	 */
	private $id;

	/**
	 * invoiceNumber
	 *
	 * @var string|null
	 */
	private $invoiceNumber;

	/**
	 * invoiceDate
	 *
	 * @var DateTimeInterface|null
	 */
	private $invoiceDate;

	/**
	 * expirationDate
	 *
	 * @var DateTimeInterface|null
	 */
	private $expirationDate;

	/**
	 * state
	 *
	 * @var string|null
	 */
	private $state;

	/**
	 * amount
	 *
	 * @var float|null
	 */
	private $amount;

	/**
	 * lines
	 *
	 * @var InvoiceLine[]|null
	 */
	private $lines;

	/**
	 * __typename
	 *
	 * @var string|null
	 */
	private $__typename;


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
	 * invoiceNumber
	 *
	 * @return string|null
	 */
	public function getInvoiceNumber()
	{
		return $this->invoiceNumber;
	}


	/**
	 * invoiceNumber
	 *
	 * @param string|null $invoiceNumber
	 * @return $this
	 */
	public function setInvoiceNumber($invoiceNumber = null): self
	{
		$this->invoiceNumber = $invoiceNumber === null ? null : (string) $invoiceNumber;
		return $this;
	}


	/**
	 * invoiceDate
	 *
	 * @return DateTimeInterface|null
	 */
	public function getInvoiceDate()
	{
		return $this->invoiceDate;
	}


	/**
	 * invoiceDate
	 *
	 * @param DateTimeInterface|null $invoiceDate
	 * @return $this
	 */
	public function setInvoiceDate($invoiceDate = null): self
	{
		if ($invoiceDate !== null && !$invoiceDate instanceof DateTimeInterface) {
		    $invoiceDate = new \DateTimeImmutable($invoiceDate);
		}
		$this->invoiceDate = $invoiceDate;
		return $this;
	}


	/**
	 * expirationDate
	 *
	 * @return DateTimeInterface|null
	 */
	public function getExpirationDate()
	{
		return $this->expirationDate;
	}


	/**
	 * expirationDate
	 *
	 * @param DateTimeInterface|null $expirationDate
	 * @return $this
	 */
	public function setExpirationDate($expirationDate = null): self
	{
		if ($expirationDate !== null && !$expirationDate instanceof DateTimeInterface) {
		    $expirationDate = new \DateTimeImmutable($expirationDate);
		}
		$this->expirationDate = $expirationDate;
		return $this;
	}


	/**
	 * state
	 *
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}


	/**
	 * state
	 *
	 * @param string|null $state
	 * @return $this
	 */
	public function setState($state = null): self
	{
		$this->state = $state === null ? null : (string) $state;
		return $this;
	}


	/**
	 * amount
	 *
	 * @return float|null
	 */
	public function getAmount()
	{
		return $this->amount;
	}


	/**
	 * amount
	 *
	 * @param float|null $amount
	 * @return $this
	 */
	public function setAmount($amount = null): self
	{
		$this->amount = $amount === null ? null : (float) $amount;
		return $this;
	}


	/**
	 * lines
	 *
	 * @return InvoiceLine[]|null
	 */
	public function getLines()
	{
		return $this->lines;
	}


	/**
	 * lines
	 *
	 * @param InvoiceLine[]|null $lines
	 * @return $this
	 */
	public function setLines($lines = null): self
	{
		$this->lines = [];
		if ($lines === null) return $this;
		foreach ($lines as $item) {
		    $this->addLinesValue($item);
		}
		return $this;
	}


	private function addLinesValue($lines)
	{
		if ($lines !== null && !$lines instanceof \HipexPackApi\Generated\Schema\Type\InvoiceLine) {
		    $lines = new \HipexPackApi\Generated\Schema\Type\InvoiceLine($lines);
		}
		$this->lines[] = $lines;
	}


	/**
	 * __typename
	 *
	 * @return string|null
	 */
	public function get__typename()
	{
		return $this->__typename;
	}


	/**
	 * __typename
	 *
	 * @param string|null $__typename
	 * @return $this
	 */
	public function set__typename($__typename = null): self
	{
		$this->__typename = $__typename === null ? null : (string) $__typename;
		return $this;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->id !== null) $result['id'] = $this->id;
		if ($this->invoiceNumber !== null) $result['invoiceNumber'] = $this->invoiceNumber;
		if ($this->invoiceDate !== null) $result['invoiceDate'] = $this->invoiceDate;
		if ($this->expirationDate !== null) $result['expirationDate'] = $this->expirationDate;
		if ($this->state !== null) $result['state'] = $this->state;
		if ($this->amount !== null) $result['amount'] = $this->amount;
		if ($this->lines !== null) $result['lines'] = $this->lines;
		if ($this->__typename !== null) $result['__typename'] = $this->__typename;
		return $result;
	}
}
