<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class AdminController extends AbstactController
{
  
  public function accueil()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    if($u["role"] == 0){
      header("Location: /");
      return;
    }
    else{
      $fiveLastUsers = $this->User->get_five_last_registered_users();
      
      $data = array(
          'userCount' => sizeof($this->User->get_all_informations()),
          'lastUsers' => $fiveLastUsers
      );
      $this->render('admin', 'accueil', array($u, $data));
    }
  }
}