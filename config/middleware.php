<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Middlewares File Location
    |--------------------------------------------------------------------------
    |
    | We need a location where middleware files may be stored.
    | A default has been set 'middlewares' for you but a different location may be specified
    |
    */
    'path' => 'middlewares',
    /*
    |------------------------------------------------------------------------
    | Middleware Except
    |------------------------------------------------------------------------
    | The router or classes that should be excluded from Middleware.
    | Router example: demo
    | Class example: Test@main
    | @var array
    */
    'except' => [],
    /*
     * ----------------------------------------------------------------------
     * The application's route middleware groups.
     *-----------------------------------------------------------------------
     * @var array
     * Example:
     * 'age' => Cuveen\Middleware\CheckAge::class
     */
    'groups'=>[
    ]
];
