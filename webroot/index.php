<?php

define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require '../vendor/autoload.php';

function handler(Throwable $e) {
  echo '<pre>';
  echo '<h1>Tu es une merde, corrige ton code !</h1>';
  echo '<h3>'. $e->getMessage() . '</h3>';
  echo '<p>' . $e->getTraceAsString() . '</p>';
}

$routes = require '../app/routes.php';
$router = new App\Core\Router($routes);

return $router->start();