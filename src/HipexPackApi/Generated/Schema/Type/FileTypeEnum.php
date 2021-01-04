<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-21
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

/**
 * Filesystem file type
 * @codeCoverageIgnore
 */
class FileTypeEnum extends \HipexPackApi\Schema\BaseType
{
	/** File */
	const VALUE_FILE = 'file';
	/** Directory */
	const VALUE_DIRECTORY = 'directory';
	/** Symlink */
	const VALUE_SYMLINK = 'symlink';

}
