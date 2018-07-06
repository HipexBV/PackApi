<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class Backup extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query Backup($domain: Int, $database: Int, $id: String) {' . PHP_EOL;
		$body .= '    Backup(domain: $domain, database: $database, id: $id) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        created' . PHP_EOL;
		$body .= '        size' . PHP_EOL;
		$body .= '        url' . PHP_EOL;
		$body .= '        domain {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        database {' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\Backup();
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
		return 'Backup';
	}
}
