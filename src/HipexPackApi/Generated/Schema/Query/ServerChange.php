<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class ServerChange extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query ServerChange($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    ServerChange(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        user {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        customer {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        entityType' . PHP_EOL;
		$body .= '        entityId' . PHP_EOL;
		$body .= '        entityName' . PHP_EOL;
		$body .= '        action' . PHP_EOL;
		$body .= '        started' . PHP_EOL;
		$body .= '        finished' . PHP_EOL;
		$body .= '        executor' . PHP_EOL;
		$body .= '        metaData' . PHP_EOL;
		$body .= '        failed' . PHP_EOL;
		$body .= '        executions {' . PHP_EOL;
		$body .= '            started' . PHP_EOL;
		$body .= '            finished' . PHP_EOL;
		$body .= '            steps {' . PHP_EOL;
		$body .= '                message' . PHP_EOL;
		$body .= '                messageArguments' . PHP_EOL;
		$body .= '                finished' . PHP_EOL;
		$body .= '                successful' . PHP_EOL;
		$body .= '            }' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\ServerChange();
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
		return 'ServerChange';
	}
}
