<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class PerformanceScanStart extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation PerformanceScanStart($website: String!) {' . PHP_EOL;
		$body .= '    PerformanceScanStart(website: $website) {' . PHP_EOL;
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
		return false;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnKey(): string
	{
		return 'PerformanceScanStart';
	}
}
