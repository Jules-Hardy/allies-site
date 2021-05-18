<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class SensorController extends AbstactController
{
  
  public function touslescapteurs()
  {
    $this->render('admin', 'sensor-index');
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