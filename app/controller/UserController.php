<?php

namespace App\Controller;

use App\Core\AbstactController;

class UserController extends AbstactController
{
  public function affichermonprofil(){
    $this->render('vitrine', 'mon-profil');
  }

  public function editermonprofil(){
    $this->render('vitrine', '');
  }

  public function supprimermonprofil(){
    $this->render('vitrine', '');
  }
}