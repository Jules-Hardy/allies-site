<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;
use \App\Model\UserModel;
use \App\Utils\Roles; 
class UserController extends AbstactController
{
  
  public function touslesutilisateurs()
  {
    $this->load_model("User");
    $loggedUser = $this->User->get_logged_user_if_exists();
    if($loggedUser === NULL){
      header("Location: /connexion");
      return;
    }
    $data = $this->User->get_all_informations();
    $this->render("admin", "user-index", array($loggedUser, $data));
  }

  public function voirprofil(int $id)
  {
    $this->load_model("User");
    $loggedUser = $this->User->get_logged_user_if_exists();
    if($loggedUser === NULL){
      header("Location: /connexion");
      return;
    }
    if(isset($_POST["modify"])){
      $firstname = $_POST["firstname"];
      $lastname = $_POST["lastname"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $role = $_POST["role"];
      $this->User->updateUser($id, $firstname, $lastname, $email, $password, $role);

    }
    $data = $this->User->get_one_user_informations($id);
    $outject = array(0 => $loggedUser, 1 => $data);
    $outject[1]["roleName"] = Roles::get_role_name_for_id($outject[1]["role"]);
    $this->render('admin', 'user-seeone',$outject);
  } 

  public function supprimerutilisateur(int $id)
  {
    $this->load_model("User");
    $data = $this->User->delete_user($id);
    $this->render('admin', 'user-index', $data);
  }
}