<?php
return array(
    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Cuveen'),
    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),
    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),
    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'America/Chihuahua',
    /*
    |--------------------------------------------------------------------------
    | Controller File Location
    |--------------------------------------------------------------------------
    |
    | We need a location where controller files may be stored.
    | A default has been set 'controllers' for you but a different location may be specified
    |
    */
    'controllers' => env('CONTROLLER_PATH','controllers'),
    /*
    |--------------------------------------------------------------------------
    | User class for authentication
    |--------------------------------------------------------------------------
    |
    | We need set User class ofr authentication.
    |
    */
    'user_class'=> env('USER_CLASS','User'),
    /*
    |--------------------------------------------------------------------------
    | 404 Not Found Handing File
    |--------------------------------------------------------------------------
    | Accept PHP file, HTML file
    | The default 404 handler sets a 404 status code and exits. You can override this default 404 handler by using
    |
    */
    'notfound' => '404.html'
);
