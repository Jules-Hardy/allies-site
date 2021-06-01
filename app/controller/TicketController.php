<?php

namespace App\Controller;

use App\Core\AbstractController;

class TicketController extends AbstractController
{
  public function affichertouslestickets(){
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    
    if($log == null)header("Location: /");

    $this->load_model("Ticket");
    $tickets = $this->Ticket->get_tickets_for($log["id"]);
    $this->render('vitrine', 'ticket-index', array($log, $tickets));
  }

  public function nouveauticket(){   
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();

    if(isset($_POST["title"]) && isset($_POST["content"])){
      $content = $_POST["content"];
      $title = $_POST["title"];
      if(!$log || $log == null){
        header("Location: /");
        return;
      }

      $this->load_model("Ticket");
      $this->Ticket->create_ticket($title, $content, $log);
      header("Location: /support");
    }
 
    
    $this->render('vitrine', 'nouveauticket', array($log));
  }

  public function voirunticket($id){
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    
    if($log == null)header("Location: /");

    $this->load_model("Ticket");
    $ticket = $this->Ticket->get_ticket($id);
    if($ticket["id_author"] != $log["id"])
      header("Location: /");

    $this->load_model("Message");
    $messages = $this->Message->get_messages($id);
    $this->render('vitrine', 'ticket-answer', array($log, $ticket, $messages));
  }

  public function supprimerticket($id){   
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    
    if($log == null)header("Location: /");

    $this->load_model("Ticket");
    $ticket = $this->Ticket->get_ticket($id);
    if($ticket["id_author"] != $log["id"])
      header("Location: /");

      $this->Ticket->close_ticket($id);
      header("Location: /support");
  }
}