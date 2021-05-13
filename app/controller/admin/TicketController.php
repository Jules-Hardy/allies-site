<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class TicketController extends AbstactController
{
  
  public function view($nom)
  {
    $this->render('index', [
      'nom' => 'ok',
      'test' => 'test'
    ]);
  }
}