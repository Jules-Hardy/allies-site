<?php

namespace App\Controller;

use App\Core\AbstactController;

class TicketController extends AbstactController
{
  public function affichertouslestickets(){
    $this->render('vitrine', 'pageticket');
  }

  public function nouveauticket(){
    if(isset($_POST["message"])){
      $message = $_POST["message"];
      
    }
    $this->render('vitrine', 'nouveauticket');
  }

  public function voirunticket($id){
    $this->render('vitrine', '');
  }
}