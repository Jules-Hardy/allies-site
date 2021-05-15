<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class UserController extends AbstactController
{
  
  public function touslesutilisateurs()
  {
    $this->render('admin', 'user-index');
  }

  public function editerutilisateur()
  {
    $this->render('admin', 'user-seeone');
  }
}