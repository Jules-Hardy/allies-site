<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class TicketController extends AbstactController
{
  
  public function touslestickets()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    else{
      $this->render('admin', 'ticket-seeall', array($u));
    }
  }

  public function repondre()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    else{
      $this->render('admin', 'ticket-seeone', array($u));
    }
  }
}