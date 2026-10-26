<?php

/**
 * Request Guard
 *
 * Provides lightweight in-process request throttling during the
 * `pre_system` phase to catch abusive or looping requests as early
 * as possible in the CiSkeleton lifecycle.
 *
 * Plugins are now loaded at boot time—before the router and long
 * before controllers are resolved—allowing them to participate in
 * core lifecycle hooks such as `pre_system`. This ensures guards,
 * security filters, and early bootstrap logic run at the earliest
 * safe entry point.
 *
 * The mechanism uses a static counter scoped to the current PHP
 * process. Once the defined limit is reached, further requests are
 * blocked with an HTTP 429 (Too Many Requests) response.
 *
 * Typical use cases include:
 *  - Preventing request floods caused by misconfigured clients
 *  - Throttling self-referential cron jobs or API calls
 *  - Guarding against runaway AJAX polling or error loops
 *
 * Configuration:
 *  - Define `CI_REQUEST_LIMIT` in your environment or config file
 *    to override the default limit (20 requests per process).
 *
 * Limitations:
 *  - Applies only to the current PHP process; not global rate limiting
 *  - Reset on process restart (i.e., per-request on most traditional PHP setups)
 *
 * @package     CiSkeleton\Plugins
 * @subpackage  RequestGuard
 * @category    Security
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 *
 * @hook        `pre_system`
 */

if (!CI_LIVE) return;

define_const('CI_REQUEST_LIMIT', 20);

add_action('pre_system', static function () {
	static $limit, $count = 0;

	// Set application-specific request limit.
	$limit ??= CI_REQUEST_LIMIT;

	// Exceeded the limit?
	if ($count >= $limit) {
		log_message('critical', sprintf('Request limiter triggered after %d requests in process.', $limit));
		show_429();
	}

	// Increment request counter.
	$count += 1;
});
