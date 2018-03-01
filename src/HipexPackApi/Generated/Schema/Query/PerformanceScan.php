<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class PerformanceScan extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query PerformanceScan($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    PerformanceScan(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        url' . PHP_EOL;
		$body .= '        createdAt' . PHP_EOL;
		$body .= '        name' . PHP_EOL;
		$body .= '        domain {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        finished' . PHP_EOL;
		$body .= '        score' . PHP_EOL;
		$body .= '        screenDesktop' . PHP_EOL;
		$body .= '        screenMobile' . PHP_EOL;
		$body .= '        groups {' . PHP_EOL;
		$body .= '            name' . PHP_EOL;
		$body .= '            score' . PHP_EOL;
		$body .= '            items {' . PHP_EOL;
		$body .= '                name' . PHP_EOL;
		$body .= '                value' . PHP_EOL;
		$body .= '                generalDescription' . PHP_EOL;
		$body .= '                scanDescription' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\PerformanceScan();
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
		return 'PerformanceScan';
	}
}
