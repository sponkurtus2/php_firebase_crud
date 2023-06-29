<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
    ->withServiceAccount('crud-php-42285-firebase-adminsdk-6mxwu-491ba10ffb.json')
    ->withDatabaseUri('https://crud-php-42285-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();

?>
