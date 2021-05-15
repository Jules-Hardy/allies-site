<?php

namespace App\Controller;

use App\Core\AbstactController;

class PagesController extends AbstactController
{
  
  public function index($a, $b)
  {
    dump($a, $b);
    die;
    $this->render('index', [
      'nom' => 'ok',
      'test' => 'test'
    ]);
  }

  public function faq(){
    $this->render('vitrine', 'accueil');
  }
}