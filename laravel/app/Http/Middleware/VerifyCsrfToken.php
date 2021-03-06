<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {
	/**
	 * The URIs that should be excluded from CSRF verification.
	 *
	 * @var array
	 */
	protected $except
		= [
			'git',
			'v1/testPost',
			'v2/direction/byMixed',
			'v2/location/byText',
			'v2/bot/chat',
			'web/bot/chat/api',
			'bot/api',
			'test/post',
			'gen/traffic',
		];
}
