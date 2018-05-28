<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class SSHKey extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query SSHKey($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    SSHKey(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        name' . PHP_EOL;
		$body .= '        type' . PHP_EOL;
		$body .= '        key' . PHP_EOL;
		$body .= '        validUntil' . PHP_EOL;
		$body .= '        users {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        servers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        entityTypeName' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\SSHKey();
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnArray(): bool
	{
		return true;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnKey(): string
	{
		return 'SSHKey';
	}
}
