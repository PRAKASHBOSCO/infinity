<?php

require "vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$app = new Digient\Framework\Application();

$app->run();

?>