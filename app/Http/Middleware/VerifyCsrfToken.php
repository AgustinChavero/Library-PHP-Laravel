<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/user',
        'api/user/create',
        'api/user/detail/*',
        'api/user/edit/*',
        'api/user/delete/*',
        'api/book',
        'api/book/create',
        'api/book/detail/*',
        'api/book/edit/*',
        'api/book/delete/*',
        'api/review',
        'api/review/create',
        'api/review/detail/*',
        'api/review/edit/*',
        'api/review/delete/*',
        'api/auth/login',
        'api/auth/logout',
    ];
}
