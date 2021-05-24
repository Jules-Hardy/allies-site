<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;
use \App\Model\UserModel;

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
    $this->render('admin', 'user-index', $data, $loggedUser);
  }

  public function voirprofil(int $id)
  {
    $this->load_model("User");
    $data = $this->User->get_one_user_informations($id);
    $this->render('admin', 'user-seeone', $data);
    echo $_POST['firstname'];
  }

  public function supprimerutilisateur(int $id)
  {
    $this->load_model("User");
    $data = $this->User->delete_user($id);
    $this->render('admin', 'user-index', $data);
  }
}