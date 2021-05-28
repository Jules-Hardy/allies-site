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

    $this->load_model("Sensor");
    $this->load_model("Test");
    $allCapteurs = $this->Sensor->get_all_informations();
    $allTests = $this->Test->get_all_informations();
    $lastTests = $this->Test->get_five_last_tests();
    $allUsers = $this->User->get_all_informations();
    $this->render('admin', 'sensor-index', array($u, $allCapteurs, $allTests, $lastTests, $allUsers));
  }

  public function modifiercapteur($i)
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null){
      header("Location: /");
      return;
    }

    $this->load_model("Sensor");
    $s = $this->Sensor->get_one_sensor_informations($i);

    $this->render('admin', 'sensor-seeone', array($u, $i, $s));
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