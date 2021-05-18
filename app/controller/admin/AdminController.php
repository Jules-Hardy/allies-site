<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class AdminController extends AbstactController
{
  
  public function accueil()
  {
    $this->render('admin', 'accueil');
  }
}