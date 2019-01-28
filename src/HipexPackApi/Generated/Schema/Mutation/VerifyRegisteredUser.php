<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class VerifyRegisteredUser extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation VerifyRegisteredUser($email: String!, $verificationToken: String!) {' . PHP_EOL;
		$body .= '    VerifyRegisteredUser(email: $email, verificationToken: $verificationToken) {' . PHP_EOL;
		$body .= '        success' . PHP_EOL;
		$body .= '        message' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\Verification();
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
		return 'VerifyRegisteredUser';
	}
}
