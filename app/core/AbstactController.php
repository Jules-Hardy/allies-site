<?php

namespace App\Core;

use Exception;

abstract class AbstactController
{
  public $request;
  public $vars = array();
  public $message_template = [];

  public function __construct($request)
  {
    $this->request = $request;
  }


  public function render($space, $view, $vars = [], $message_template=null) { //On précise si on est dans l'admin ou dans la vitrine
    extract($vars);
    extract($this->vars);
    if(isset($message_template)){
      extract($message_template);
      extract($this->message_template);
    }
  
    $view = ROOT . '/app/view/' . $space . '/'. $view . '.php';
    
    if (!file_exists($view))
      throw new Exception('La vue : '. $view .' vue n\'existe pas ');

    require($view);
  }
  
  public function load_model(string $model, ...$params)
  {
    require_once(ROOT . "/app/model/" . $model . "Model.php");
    $fmodel = "\App\Model\\" . $model."Model";
    $this->$model = new $fmodel(...$params);
  }
}