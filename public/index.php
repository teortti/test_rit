<?php 

use App\App\Router;
require '../vendor/autoload.php';
session_start();
$router = new Router;
$router($_SERVER['REQUEST_URI']);

?>