<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'classes/main.php';
// var_dump ($routes);
$router = new routing('routes.php');
require $router->redirect(requests::URI());


 ?>
