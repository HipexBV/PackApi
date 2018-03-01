<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class Checklist extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query Checklist($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    Checklist(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        domain {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        applicationInfo {' . PHP_EOL;
		$body .= '            type' . PHP_EOL;
		$body .= '            version' . PHP_EOL;
		$body .= '            latestVersion' . PHP_EOL;
		$body .= '            url' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        error' . PHP_EOL;
		$body .= '        finished' . PHP_EOL;
		$body .= '        groups {' . PHP_EOL;
		$body .= '            title' . PHP_EOL;
		$body .= '            checks {' . PHP_EOL;
		$body .= '                tooltip' . PHP_EOL;
		$body .= '                title' . PHP_EOL;
		$body .= '                status' . PHP_EOL;
		$body .= '                statusLevel' . PHP_EOL;
		$body .= '                error' . PHP_EOL;
		$body .= '            }' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        status' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\Checklist();
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
		return 'Checklist';
	}
}
