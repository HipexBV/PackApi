<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class User extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query User($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    User(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        user' . PHP_EOL;
		$body .= '        passwordEnabled' . PHP_EOL;
		$body .= '        server {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        sshKeys {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\User();
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
		return 'User';
	}
}
