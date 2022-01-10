<?php 

require './config.php';

use app\Controllers\Router;
use app\Controllers\HomeController;

$router = new Router();
$router->start($_REQUEST);