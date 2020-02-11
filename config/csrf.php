<?php
return [
    /*
    |------------------------------------------------------------------------
    | Verify CSRF Token Except
    |------------------------------------------------------------------------
    | The router or classes that should be excluded from Middleware.
    | Router example: demo
    | Class example: Test@main
    | @var array
    */
    'except' => [],
    /*
    |--------------------------------------------------------------------------
    | CSRF Token Lifetime
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of minutes that you wish the session
    | to be allowed to remain idle before it expires. If you want them
    | to immediately expire on the browser closing, set that option.
    |
    */
    'lifetime' => env('TOKEN_LIFETIME','120'),
];
