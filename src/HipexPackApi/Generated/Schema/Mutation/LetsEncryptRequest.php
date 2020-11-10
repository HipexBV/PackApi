<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class LetsEncryptRequest extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation LetsEncryptRequest($entity: LetsEncryptRequestInput) {' . PHP_EOL;
		$body .= '    LetsEncryptRequest(entity: $entity) {' . PHP_EOL;
		$body .= '        steps {' . PHP_EOL;
		$body .= '            message' . PHP_EOL;
		$body .= '            successful' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\LetsEncryptValidation();
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
		return 'LetsEncryptRequest';
	}
}
