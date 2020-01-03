<?php

/**
 * @author Hipex B.V. <info@hipex.io>
 * @copyright (c) Hipex B.V. 2015-20
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
	const VALUE_DISABLED = 'disabled';
	/** Default */
	const VALUE_DEFAULT = 'default';
	/** Nginx compressed */
	const VALUE_COMPRESSION = 'compression';
	/** Nginx combined */
	const VALUE_COMBINED = 'combined';
	/** Nginx combined with request time */
	const VALUE_TIMED_COMBINED = 'timed_combined';
	/** Default with $bytes_sent */
	const VALUE_DEFAULT_WITH_HEADER_BYTES = 'default_with_header_bytes';
	/** Behind load balancer / CloudFlare */
	const VALUE_FORWARD_IP = 'forward_ip';
	/** Full requests */
	const VALUE_FULL = 'full';

}
