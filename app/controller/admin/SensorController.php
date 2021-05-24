<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class SensorController extends AbstactController
{
  
  public function touslescapteurs()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null){
      header("Location: /");
      return;
    }

    $this->render('admin', 'sensor-index', array($u));
  }

  public function modifiercapteur()
  {
    $this->render('admin', 'sensor-seeone');
  }

  public function touslestests()
  {
    $this->render('admin', 'test-seeall');
  }

  public function modifiertest()
  {
    $this->render('admin', 'test-seeone');
  }
}