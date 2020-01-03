<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

/**
 * Check result in checklist.
 * @codeCoverageIgnore
 */
class StatusTypeEnum extends \HipexPackApi\Schema\BaseType
{
	/** Test executed successfully and no problems are found. */
	const VALUE_GOOD = 'good';
	/** Test executed successfully and small problem was found. */
	const VALUE_WARN = 'warn';
	/** Test executed successfully error is found that should be fixed. */
	const VALUE_ERROR = 'error';
	/** Test executed successfully and critical issue was found that should be fixed immediately. */
	const VALUE_CRITICAL = 'critical';
	/** Test could not be executed (not support for application type). */
	const VALUE_SKIPPED = 'skipped';
	/** Test is pending to be executed. */
	const VALUE_PENDING = 'pending';
	/** Test execution failed. */
	const VALUE_EXCEPTION = 'exception';

}
