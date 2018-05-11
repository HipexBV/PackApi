<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class SslCertificate extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation SslCertificate($entity: SslCertificateInput, $delete: Boolean!) {' . PHP_EOL;
		$body .= '    SslCertificate(entity: $entity, delete: $delete) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        issuer' . PHP_EOL;
		$body .= '        expires' . PHP_EOL;
		$body .= '        domain' . PHP_EOL;
		$body .= '        alternativeDomains' . PHP_EOL;
		$body .= '        certificate' . PHP_EOL;
		$body .= '        chain' . PHP_EOL;
		$body .= '        key' . PHP_EOL;
		$body .= '        connectedDomainPointers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        connectedDomains {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        certificateError' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\SSLCertificate();
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
		return 'SslCertificate';
	}
}
