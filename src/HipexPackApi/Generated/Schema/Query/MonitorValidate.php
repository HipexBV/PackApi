<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class MonitorValidate extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query MonitorValidate($domainName: String) {' . PHP_EOL;
		$body .= '    MonitorValidate(domainName: $domainName) {' . PHP_EOL;
		$body .= '        domainName' . PHP_EOL;
		$body .= '        successful' . PHP_EOL;
		$body .= '        result {' . PHP_EOL;
		$body .= '            successful' . PHP_EOL;
		$body .= '            message' . PHP_EOL;
		$body .= '            messageArguments' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\MonitorValidation();
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
		return 'MonitorValidate';
	}
}
