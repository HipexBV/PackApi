<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class ChecklistStart extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation ChecklistStart($id: Int!) {' . PHP_EOL;
		$body .= '    ChecklistStart(id: $id) {' . PHP_EOL;
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
		return false;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnKey(): string
	{
		return 'ChecklistStart';
	}
}
