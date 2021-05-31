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
      if($u['role'] == 0)
        header("Location: /");

      $this->load_model("Ticket");
      $tickets = $this->Ticket->get_all_informations();
      $allU = $this->User->get_all_informations();

      $this->render('admin', 'ticket-seeall', array($u, $tickets, $allU));
    }
    
  }

  public function repondre($id)
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    else{
      if($u['role'] == 0)
        header("Location: /");
        
      $this->load_model("Ticket");
      $this->load_model("Message");

      if(isset($_POST["message"])){
        $msg = $_POST["message"];
        $this->Message->send_message($id, $u, $msg);
      }

      $tickets = $this->Ticket->get_ticket($id);
      $allU = $this->User->get_all_informations();
      $msg = $this->Message->get_messages($id);
      $this->render('admin', 'ticket-seeone', array($u, $tickets, $allU, $msg));
    }
  }
}