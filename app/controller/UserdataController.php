<?php

namespace App\Controller;

use App\Core\AbstractController;

class UserdataController extends AbstractController
{
  public function afficher(){
    $this->render('vitrine', 'statistiques');
  }

}