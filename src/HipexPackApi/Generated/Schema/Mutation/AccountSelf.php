<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class AccountSelf extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation AccountSelf($accountSelf: AccountSelfInput) {' . PHP_EOL;
		$body .= '    AccountSelf(accountSelf: $accountSelf) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        email' . PHP_EOL;
		$body .= '        locale' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\AccountSelf();
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
		return 'AccountSelf';
	}
}
