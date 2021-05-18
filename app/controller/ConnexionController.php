<?php

namespace App\Controller;

use App\Core\AbstactController;

class ConnexionController extends AbstactController
{
  public function connexion(){
    $this->render('vitrine', 'connexion');
  }

  public function inscription(){
    $this->render('vitrine', 'inscription');
  }

  public function oublie(){
    $this->render('vitrine', 'forgotyourpassword');
  }

  public function deconnexion(){
    $this->render('vitrine', 'accueil');
  }
}