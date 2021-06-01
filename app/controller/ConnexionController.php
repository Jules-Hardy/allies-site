<?php

namespace App\Controller;

use App\Core\AbstractController;

class ConnexionController extends AbstractController
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
    print_r($_POST);
    if(
      isset($_POST["lastname"]) &&
      isset($_POST["firstname"]) &&
      isset($_POST["email"]) &&
      isset($_POST["password"]) &&
      isset($_POST["password2"]) &&
      isset($_POST["checkCond"]) &&
      (
        isset($_POST["Homme"]) || 
        isset($_POST["Femme"]))
    ){
      $fs = $_POST["firstname"];
      $ls = $_POST["lastname"];
      $sexe = isset($_POST["Homme"]) ? "Homme" : "Femme";
      $email = $_POST["email"];
      $password = $_POST["password"];
      $password2 = $_POST["password2"];
      $checkCond = $_POST["checkCond"];
      
      if($password != $password2){
        $this->render("vitrine", "inscription", array("Les mots de passe ne correspondent pas."));
        return;
      }
      $this->load_model("User");

      if($this->User->doesEmailExists($email)){
        $this->render("vitrine", "inscription", array("Cet email est déjà utilisé !"));
        return;
      }
      $password = hash("tiger192,3", $password);
      $this->User->create_user($fs, $ls, $email, $password, $sexe);
      header("Location: /connexion");
    }
    $this->render('vitrine', 'inscription');
  }

  public function oublie(){
    $this->render('vitrine', 'forgotyourpassword');
  }

  public function deconnexion(){
    $this->load_model("User");
    $this->User->logout();
    $this->render('vitrine', 'accueil');
  }

  
}