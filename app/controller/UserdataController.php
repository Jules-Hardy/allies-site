<?php

namespace App\Controller;

use App\Core\AbstractController;

class UserdataController extends AbstractController
{
  public function seeall()
  {
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    if ($log !== NULL){
      $this->load_model("Sensor");
      $this->load_model("Test");

      $tests = $this->Test->get_all_informations();
      $final = array();
      foreach($tests as $t){
        if($t["id_user"] == $log["id"]){
          array_push($final, $t);
        }
      }
      $this->render('vitrine', 'test-all', array($log, $final));
    }else
      header("Location: /connexion");
  }

  public function new()
  {
    $this->load_model("User");
    $log = $this->User->get_logged_user_if_exists();
    if ($log !== NULL)
      $this->render('vitrine', 'test-new', $log);
    else
      header("Location: /connexion");
  }

  public function testgetdata()
  {
    $ch = curl_init();
    curl_setopt(
      $ch,
      CURLOPT_URL,
      "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=A1CC"
    );
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    echo "Raw Data:<br />";
    echo ("$data");

    $data_tab = str_split($data, 33);
    echo "Tabular Data:<br />";
    for ($i = 0, $size = count($data_tab); $i < $size; $i++) {
      echo "Trame $i: $data_tab[$i]<br />";
    }


    $trame = $data_tab[1];
    // décodage avec des substring
    $t = substr($trame, 0, 1);
    $o = substr($trame, 1, 4); // ...
    // décodage avec sscanf
    list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame, "%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
    echo ("<br />$t,$o,$r,$c,$n,$v,$a,$x,$year,$month,$day,$hour,$min,$sec<br />");
  }
}
