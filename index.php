<?php

require_once __DIR__ . './vendor/autoload.php';

use Sehouli\config\Database;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->load();

$con = Database::connect(host:$_ENV['DB_HOST'], port:$_ENV['DB_PORT'], dbname:$_ENV['DB_NAME'], db_username:$_ENV['DB_USERNAME'], db_password:$_ENV['DB_PASSWORD']);

echo 'hi ss';
