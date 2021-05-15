<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class TicketController extends AbstactController
{
  
  public function touslestickets()
  {
    $this->render('admin', 'ticket-seeall');
  }

  public function repondre()
  {
    $this->render('admin', 'ticket-seeone');
  }
}