<?php
namespace HipexPackApi\Generated\Schema\Query;

use HipexPackApi\Schema\BaseType;

class FilesystemApplication extends \HipexPackApi\Schema\BaseQuery
{
	/**
	 * {@inheritdoc}
	 */
	public function getBody(): string
	{
		$body = '';
		$body .= 'query FilesystemApplication($path: ChrootPath, $depth: Int, $type: FileType, $applicationId: Int!) {' . PHP_EOL;
		$body .= '    FilesystemApplication(path: $path, depth: $depth, type: $type, applicationId: $applicationId) {' . PHP_EOL;
		$body .= '        path' . PHP_EOL;
		$body .= '        size' . PHP_EOL;
		$body .= '        type' . PHP_EOL;
		$body .= '        modifiedTime' . PHP_EOL;
		$body .= '    }' . PHP_EOL;
		$body .= '}' . PHP_EOL;
		return $body;
	}


	/**
	 * {@inheritdoc}
	 */
	public function getReturnType(): BaseType
	{
		return new \HipexPackApi\Generated\Schema\Type\Filesystem();
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
		return 'FilesystemApplication';
	}
}
