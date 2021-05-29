<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class TicketController extends AbstactController
{
  
  public function touslestickets()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)
      header("Location: /");
    else{
      $this->load_model("Ticket");
      $tickets = $this->Ticket->get_all_informations();
      $this->render('admin', 'ticket-seeall', array($u, $tickets));
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