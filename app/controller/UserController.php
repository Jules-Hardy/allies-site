<?php

namespace App\Controller;

use App\Core\AbstactController;

class UserController extends AbstactController
{
  public function affichermonprofil(){
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    if($log !== NULL)
      $this->render('vitrine', 'mon-profil', $log);
    else
      header("Location: /connexion");
  }

  public function editermonprofil(){
    $this->render('vitrine', '');
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    if($log !== NULL)
      $this->render('vitrine', '', $log);
    else
      header("Location: /connexion");
  }

  public function supprimermonprofil(){
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    if($log !== NULL)
      $this->render('vitrine', '');
    else
      header("Location: /connexion");
  }

  
}