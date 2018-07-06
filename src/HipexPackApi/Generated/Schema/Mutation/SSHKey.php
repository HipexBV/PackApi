<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class SSHKey extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation SSHKey($entity: SshKeyInput, $delete: Boolean!) {' . PHP_EOL;
		$body .= '    SSHKey(entity: $entity, delete: $delete) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        name' . PHP_EOL;
		$body .= '        type' . PHP_EOL;
		$body .= '        key' . PHP_EOL;
		$body .= '        validUntil' . PHP_EOL;
		$body .= '        users {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        servers {' . PHP_EOL;
		$body .= '            id' . PHP_EOL;
		$body .= '        }' . PHP_EOL;
		$body .= '        entityTypeName' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\SSHKey();
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
		return 'SSHKey';
	}
}
