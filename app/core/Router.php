<?php

namespace App\Core;

use Exception;

class Router
{
  private $routes = [];

  public function __construct($routes)
  {
    $this->request = new Request();
    $this->routes = $routes;  
  }

  public function start()
  {
    foreach ($this->routes as $route => $action) {
      $pattern = '#^' . preg_replace('/\\\:[a-zA-Z0-9\_\-]+/', '([a-zA-Z0-9\-\_]+)', preg_quote($route)) . '$#';
      if (preg_match($pattern, $this->request->url, $matches)) {
        array_shift($matches);
        $actions = explode('::', $action);
        return $this->loadController($actions[0], $actions[1], $matches);
      }
    }
    
    throw new Exception('Erreur 404, la route n\'est pas déclarée dans le fichier de route.');
  }

  public function loadController($controller, $action, $params)
  {
    $controller = 'App\Controller\\' . $controller;
    if (!class_exists($controller))
      throw new Exception('Cette classe n\'existe pas !');

    $controller = new $controller($this->request);
    if (!method_exists($controller, $action))
      throw new Exception('La méthode ' . $action . ' n\'existe pas.');

    return call_user_func_array([$controller, $action], $params);
  }
}