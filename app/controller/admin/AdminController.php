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
    else{
      $data = array(
          'userCount' => sizeof($this->User->get_all_informations())
      );
      $this->render('admin', 'accueil', array($u, $data));
    }
  }
}