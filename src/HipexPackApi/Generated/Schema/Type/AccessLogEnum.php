<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-18
 * @see https://service.hipex.io/hipex-pack-api/docs/
 * File generated from https://service.hipex.io/hipex-pack-api GraphQL endpoint.
 */

namespace HipexPackApi\Generated\Schema\Type;

/**
 * Access log types.
 * @codeCoverageIgnore
 */
class AccessLogEnum extends \HipexPackApi\Schema\BaseType
{
	/** Disabled */
	const VALUE_DISABLED = 'DISABLED';
	/** Default format */
	const VALUE_DEFAULT = 'DEFAULT';
	/** Default format with $bytes_sent */
	const VALUE_DEFAULT_WITH_HEADER_BYTES = 'DEFAULT_WITH_HEADER_BYTES';
	/** Behind load balancer / CloudFlare */
	const VALUE_FORWARD_IP = 'FORWARD_IP';
	/** Rull requests */
	const VALUE_FULL = 'FULL';

}
