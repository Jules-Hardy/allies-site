<?php

namespace App\Controller;

use App\Core\AbstactController;

class TicketController extends AbstactController
{
  public function affichertouslestickets(){
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    
    $this->render('vitrine', 'pageticket', array($log));
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
      
    }
 
    
    $this->render('vitrine', 'nouveauticket', array($log));
  }

  public function voirunticket($id){
    $this->render('vitrine', '');
  }
}