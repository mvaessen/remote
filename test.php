<?php

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/

use Collective\Remote\Connection;

require __DIR__.'/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Set The Default Timezone
|--------------------------------------------------------------------------
|
| Here we will set the default timezone for PHP. PHP is notoriously mean
| if the timezone is not explicitly set. This will be used by each of
| the PHP date and date-time functions throughout the application.
|
*/

date_default_timezone_set('UTC');

$connection = new Connection(
    'test',
    '77.161.184.179',
    'Administrator',
    [
        'key' => '/home/premiumark/id_rsa',
        'keyphrase' => ''
    ],
    null,
    10
);

$connection->run('echo "hi"', function($data) {
    var_dump($data);
});