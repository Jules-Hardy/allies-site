<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;
use \App\Model\UserModel;

class UserController extends AbstactController
{
  
  public function touslesutilisateurs()
  {
    $this->load_model("User");
    $this->User->get_all();
    dump($this->User->get_all());
  }

  public function editerutilisateur()
  {
    $this->render('admin', 'user-seeone');
  }
}