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
        //Deshabilitar la Protección CSRF temporalmente para agregar un project
        'insertProject',
        'insertCity',
        'insertCompany',
        'insertUser',
    ];
    //
}
