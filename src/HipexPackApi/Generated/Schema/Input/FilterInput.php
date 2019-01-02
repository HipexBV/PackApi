<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-19
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Input;

use JsonSerializable;

/**
 * Semi supports sequelizejs filters (see http://docs.sequelizejs.com/en/v3/docs/querying/#operators)
 * operator starts with $ and is then treated as one of the following operators. When operator is empty $eq is asumed.
 *
 * Supported operators are:
 *  $and: {a: 5}           // AND (a = 5)
 *  $or: [{a: 5}, {a: 6}]  // (a = 5 OR a = 6)
 *  $gt: 6,                // > 6
 *  $gte: 6,               // >= 6
 *  $lt: 10,               // < 10
 *  $lte: 10,              // <= 10
 *  $ne: 20,               // != 20
 *  $between: [6, 10],     // BETWEEN 6 AND 10
 *  $notBetween: [11, 15], // NOT BETWEEN 11 AND 15
 *  $in: [1, 2],           // IN [1, 2]
 *  $notIn: [1, 2],        // NOT IN [1, 2]
 *  $like: '%hat',       // LIKE '%hat'
 *  $notLike: '%hat'     // NOT LIKE '%hat'
 *
 *  Combinations are supported with the children field
 *  {
 *    operator: '$or',
 *    children: [
 *      {
 *        operator: '$gt'
 *        field: 'rank',
 *        value: 1000,
 *      },
 *      {
 *        operator: '$lt'
 *        field: 'rank',
 *        value: 10000,
 *      }
 *    ]
 *  }
 *
 * @codeCoverageIgnore
 */
class FilterInput extends \HipexPackApi\Schema\BaseType implements JsonSerializable
{
	/**
	 * field
	 *
	 * @var string|null
	 */
	private $field;

	/**
	 * value
	 *
	 * @var string|null
	 */
	private $value;

	/**
	 * operator
	 *
	 * @var string|null
	 */
	private $operator;

	/**
	 * children
	 *
	 * @var FilterInput[]|null
	 */
	private $children;


	/**
	 * field
	 *
	 * @return string|null
	 */
	public function getField()
	{
		return $this->field;
	}


	/**
	 * field
	 *
	 * @param string|null $field
	 * @return $this
	 */
	public function setField($field = null): self
	{
		$this->field = $field === null ? null : (string) $field;
		return $this;
	}


	/**
	 * value
	 *
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->value;
	}


	/**
	 * value
	 *
	 * @param string|null $value
	 * @return $this
	 */
	public function setValue($value = null): self
	{
		$this->value = $value === null ? null : (string) $value;
		return $this;
	}


	/**
	 * operator
	 *
	 * @return string|null
	 */
	public function getOperator()
	{
		return $this->operator;
	}


	/**
	 * operator
	 *
	 * @param string|null $operator
	 * @return $this
	 */
	public function setOperator($operator = null): self
	{
		$this->operator = $operator === null ? null : (string) $operator;
		return $this;
	}


	/**
	 * children
	 *
	 * @return FilterInput[]|null
	 */
	public function getChildren()
	{
		return $this->children;
	}


	/**
	 * children
	 *
	 * @param FilterInput[]|null $children
	 * @return $this
	 */
	public function setChildren($children = null): self
	{
		$this->children = [];
		if ($children === null) return $this;
		foreach ($children as $item) {
		    $this->addChildrenValue($item);
		}
		return $this;
	}


	private function addChildrenValue($children)
	{
		if ($children !== null && !$children instanceof \HipexPackApi\Generated\Schema\Input\FilterInput) {
		    $children = new \HipexPackApi\Generated\Schema\Input\FilterInput($children);
		}
		$this->children[] = $children;
	}


	/**
	 * {@inheritdoc}
	 */
	public function jsonSerialize()
	{
		$result = [];
		if ($this->field !== null) $result['field'] = $this->field;
		if ($this->value !== null) $result['value'] = $this->value;
		if ($this->operator !== null) $result['operator'] = $this->operator;
		if ($this->children !== null) $result['children'] = $this->children;
		return $result;
	}
}
