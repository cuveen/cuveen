<?php
/**
 * Cuveen - A PHP Framework For Web Artisans
 *
 * @package  Cuveen
 * @author   Tuyen Pham <tuyenlaptrinh@gmail.com>
 */
define('CUVEEN_FRAMEWORK_START', microtime(true));
/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/
require_once(__DIR__.'/vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/
$app = new \Cuveen\App();
$app->run();
