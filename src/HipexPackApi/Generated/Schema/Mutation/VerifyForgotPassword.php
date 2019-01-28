<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class VerifyForgotPassword extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation VerifyForgotPassword($email: String!, $verificationToken: String!, $newPassword: String!, $confirmNewPassword: String!) {' . PHP_EOL;
		$body .= '    VerifyForgotPassword(email: $email, verificationToken: $verificationToken, newPassword: $newPassword, confirmNewPassword: $confirmNewPassword) {' . PHP_EOL;
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
		return 'VerifyForgotPassword';
	}
}
