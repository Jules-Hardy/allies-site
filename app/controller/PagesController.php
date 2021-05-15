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

  public function accueil(){
    $this->render('vitrine', 'accueil');
  }

  public function faq(){
    $this->render('vitrine', 'faq');
  }

  public function apropos(){
    $this->render('vitrine', 'apropos');
  }

  public function mentions(){
    $this->render('vitrine', 'mentions');
  }
}