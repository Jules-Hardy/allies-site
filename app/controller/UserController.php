<?php

namespace App\Controller;

use App\Core\AbstractController;

class UserController extends AbstractController
{
  public function affichermonprofil(){
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    if($log !== NULL){
      print_r($_POST);
      if(isset($_POST["email"])){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        if($password == "********"){
          $this->User->edit_user($log, $firstname, $lastname, $email, FALSE, "");
          return;
        }
        $this->User->edit_user($log, $firstname, $lastname, $email, TRUE, $password);
        return;
      }

      $this->render('vitrine', 'mon-profil', array($log));
    }
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