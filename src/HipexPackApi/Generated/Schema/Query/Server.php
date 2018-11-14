<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class Server extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query Server($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    Server(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        name' . PHP_EOL;
		$body .= '        development' . PHP_EOL;
		$body .= '        customer {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        domains {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        users {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        sshKeys {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        type' . PHP_EOL;
		$body .= '        parent {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        children {' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\Server();
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
		return 'Server';
	}
}
