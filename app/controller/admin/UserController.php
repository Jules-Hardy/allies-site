<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;
use \App\Model\UserModel;

class UserController extends AbstactController
{
  
  public function touslesutilisateurs()
  {
    $this->load_model("User");
    $data = $this->User->get_all_informations();
    $this->render('admin', 'user-index', $data);
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