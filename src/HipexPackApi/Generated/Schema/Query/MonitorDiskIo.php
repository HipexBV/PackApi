<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class MonitorDiskIo extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query MonitorDiskIo($applicationId: String, $serverId: String, $startTime: String, $endTime: String) {' . PHP_EOL;
		$body .= '    MonitorDiskIo(applicationId: $applicationId, serverId: $serverId, startTime: $startTime, endTime: $endTime) {' . PHP_EOL;
		$body .= '        date' . PHP_EOL;
		$body .= '        values {' . PHP_EOL;
		$body .= '            key' . PHP_EOL;
		$body .= '            value' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\MonitorQueryValue();
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
		return 'MonitorDiskIo';
	}
}
