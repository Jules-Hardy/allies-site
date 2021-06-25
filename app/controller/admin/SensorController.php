<?php

namespace App\Controller\Admin;

use App\Core\AbstractController;

class SensorController extends AbstractController
{
  
  public function touslescapteurs()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null){
      header("Location: /");
      return;
    }
    
    if($u["role"] != 2)
      header("Location: /admin/");
      
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

    
    if($u["role"] != 2)
      header("Location: /admin/");

    $this->load_model("Sensor");
    $s = $this->Sensor->get_one_sensor_informations($i);

    $this->render('admin', 'sensor-seeone', array($u, $i, $s));
  }
  

  public function voircapteurs()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u["role"] != 2){
      header("Location: /");
      return;
    }
    $this->load_model("Sensor");
    if(isset($_POST["add"]) && isset($_POST["sensorName"])){
      $name = $_POST["sensorName"];
      $this->Sensor->create($name);
    }

    $this->render('admin', 'sensor-seeall', array($u, $this->Sensor->get_all_informations()));
  }

  public function delete($id){
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null){
      header("Location: /");
      return;
    }

    
    if($u["role"] != 2)
      header("Location: /admin/");

      $this->load_model("Sensor");
      $this->Sensor->delete($id);
      header("Location: /admin/sensor/all");
  }
  public function touslestests()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null){
      header("Location: /");
      return;
    }

    
    if($u["role"] != 2)
      header("Location: /admin/");

    $this->load_model("Test");

    $this->render('admin', 'test-seeall', array($u, $this->Test->get_all_informations(), $this->User->get_all_informations()));
  }

  public function modifiertest($id)
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null){
      header("Location: /");
      return;
    }
 
    if($u["role"] != 2)
      header("Location: /admin/");

    
    $this->load_model("Test");
    $this->load_model("Sensor");

    $this->render('admin', 'test-seeone', array($u, $this->User->get_all_informations(), $this->Test->get_one_test_informations($id), $this->Sensor->get_all_informations(), $this->Sensor->get_datas()));
  }
}