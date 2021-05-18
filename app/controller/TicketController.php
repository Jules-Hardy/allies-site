<?php

namespace App\Controller;

use App\Core\AbstactController;

class UserController extends AbstactController
{
  public function affichertouslestickets(){
    $this->render('vitrine', '');
  }

  public function nouveauticket(){
    $this->render('vitrine', '');
  }

  public function voirunticket(){
    $this->render('vitrine', '');
  }
}