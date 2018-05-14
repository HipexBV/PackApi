<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class SSLCertificate extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query SSLCertificate($filter: FilterInput, $limit: Int, $skip: Int, $sort: SortInput) {' . PHP_EOL;
		$body .= '    SSLCertificate(filter: $filter, limit: $limit, skip: $skip, sort: $sort) {' . PHP_EOL;
		$body .= '        connectedDomainPointers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        connectedDomains {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        certificateError' . PHP_EOL;
		$body .= '        alternativeDomains' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        issuer' . PHP_EOL;
		$body .= '        expires' . PHP_EOL;
		$body .= '        domain' . PHP_EOL;
		$body .= '        certificate' . PHP_EOL;
		$body .= '        chain' . PHP_EOL;
		$body .= '        key' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\SslCertificate();
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
		return 'SSLCertificate';
	}
}
