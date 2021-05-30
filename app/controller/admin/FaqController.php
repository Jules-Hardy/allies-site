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
    if($u["role"] != 2){
      header("Location: /admin");
      return;
    }
    else{
      $this->load_model("Faq");
      $this->render('admin', 'faq-allquestions', array($u, $this->Faq->get_all_informations(), $this->User->get_all_informations()));
    }
  }

  public function modifier($id)
  {
    $this->load_model("User");
    $u = $this->User->get_logged_user_if_exists();
    if($u == null)header("Location: /");
    if($u["role"] != 2)
      header("Location: /admin/");
    else{
      $this->load_model("Faq");

      if(isset($_POST["question"]) && isset($_POST["answer"])){
        $isDelete = isset($_POST["delete"]);
          if($isDelete){
            $this->Faq->delete_faq($id);
            header("Location: /admin/faq/");
          }
          else
            $this->Faq->edit_faq($id, $_POST["question"], $_POST["answer"]);
      }
      $faq = $this->Faq->get_faq($id);
      $u = $this->User->get_one_user_informations($id);
      $this->render('admin', 'faq-seequestion', array($u, $faq, $u));
    }
  }
}