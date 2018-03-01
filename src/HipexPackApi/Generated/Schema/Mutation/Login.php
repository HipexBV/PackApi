<?php
namespace HipexPackApi\Generated\Schema\Mutation;

use HipexPackApi\Schema\BaseType;

class Login extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'mutation Login($username: String!, $password: String!) {' . PHP_EOL;
		$body .= '    Login(username: $username, password: $password) {' . PHP_EOL;
		$body .= '        id' . PHP_EOL;
		$body .= '        success' . PHP_EOL;
		$body .= '        errorMessage' . PHP_EOL;
		$body .= '        errorMessageId' . PHP_EOL;
		$body .= '        email' . PHP_EOL;
		$body .= '        name' . PHP_EOL;
		$body .= '        settings {' . PHP_EOL;
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
		return new \HipexPackApi\Generated\Schema\Type\Authentication();
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
		return 'Login';
	}
}
