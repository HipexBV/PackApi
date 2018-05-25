<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class Domain extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query Domain($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    Domain(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        server {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        letsEncryptCertificate {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        letsEncryptSsl' . PHP_EOL;
		$body .= '        SSLCertificate {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        domain' . PHP_EOL;
		$body .= '        backup' . PHP_EOL;
		$body .= '        user {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        customer {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        lastPerformanceScan {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        lastChecklist {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        lastIntegrationTest {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        mainPhp' . PHP_EOL;
		$body .= '        accessLogs' . PHP_EOL;
		$body .= '        alternativePhp' . PHP_EOL;
		$body .= '        pointers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        databases {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        databaseUsers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        integrationTests {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        ftpUsers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        newRelicKey' . PHP_EOL;
		$body .= '        phpMyAdmin' . PHP_EOL;
		$body .= '        monitor' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\Domain();
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
		return 'Domain';
	}
}
