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
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'accueil', array($currentU));
  }

  public function faq(){
    $this->load_model("Faq");
    $this->load_model("User");

    $faq = $this->Faq->get_all_informations();
    $u = $this->User->get_all_informations();
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'faq', array($currentU, $faq, $u));
  }

  public function apropos(){
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'apropos', array($currentU));
  }

  public function mentions(){
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'mentions', array($currentU));
  }
}