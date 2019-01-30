<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::create('./');
$dotenv->load();
define("config", $_ENV);
require 'functions.php';
require  __DIR__ .'/../app/routes.php';

