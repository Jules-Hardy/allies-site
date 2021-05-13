<?php

namespace App\Core;

use Exception;

abstract class AbstactController
{
  public $request;
  public $vars = array();

  public function __construct($request)
  {
    $this->request = $request;
  }

  public function render($view, $vars = []) {
    extract($vars);
    extract($this->vars);
  
    $view = ROOT . '/app/view/' . $view . '.php';
    
    if (!file_exists($view))
      throw new Exception('La vue : '. $view .' vue n\'existe pas ');

    require($view);
  }
}