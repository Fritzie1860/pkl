<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/login',
        '/inputuser',
        '/edituser',
        '/inputProject',
        '/editProject',
        '/tos11',
        '/tos12',
        '/tos13',
        '/tos14'
       
    ];
}
