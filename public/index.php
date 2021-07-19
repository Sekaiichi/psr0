<?php

use Hyan\Http\Install;
use Seka\Mysql\Client;

require __DIR__ . '/../autoload.php';

$client = new Client();

echo $client->connect();

$http = new Install();

echo $http->init();

