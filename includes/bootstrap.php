<?php
require './vendor/autoload.php';

include './core/Database.php';
require './core/Helper.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$database = new Database('database', 'artbox', 'root', 'local');
$dbConnection = $database->getConnection();