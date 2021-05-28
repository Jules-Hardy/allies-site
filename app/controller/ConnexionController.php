<?php

namespace App\Controller;

use App\Core\AbstactController;

class ConnexionController extends AbstactController
{
  public function connexion(){
    $this->load_model("User");
    $this->User->logout();
    if(!isset($_POST["mail"]) || !isset($_POST["password"])){
      $this->render('vitrine', 'connexion');
      return;
    }
    $u = $this->User->get_user_for_credentials($_POST["mail"], $_POST["password"]);

    if($u == NULL){
      $this->render('vitrine', 'connexion', array("invalid"));
      return;
    }

    $_SESSION["loggedUser"] = $u;
    header("Location: /admin/");
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