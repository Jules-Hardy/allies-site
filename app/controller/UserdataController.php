<?php

namespace App\Controller;

use App\Core\AbstactController;

class UserdataController extends AbstactController
{
  public function afficher(){
    $this->render('vitrine', 'statistiques');
  }

}