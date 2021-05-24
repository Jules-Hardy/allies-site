<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;

class FaqController extends AbstactController
{
  
  public function touteslesquestions()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    else{
      $this->render('admin', 'faq-allquestions', array($u));
    }
  }

  public function modifier()
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    else{
      $this->render('admin', 'faq-seequestion', array($u));
    }
  }
}