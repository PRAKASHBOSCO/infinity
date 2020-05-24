<?php

require "vendor/autoload.php";

use Models\Session;
use Models\Request;
use Symfony\Component\Dotenv\Dotenv;
use Models\Route;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$session    = new Session();
$user       = Session::checkLogin();

$request    = new Request();

$route      = new Route($request);

// require_once("routes/route.php");



?>