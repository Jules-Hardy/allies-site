<?php

namespace App\Controller\Admin;

use App\Core\AbstactController;
use \App\Model\UserModel;

class UserController extends AbstactController
{
  
  public function touslesutilisateurs()
  {
    $this->load_model("User");
    $data = $this->User->get_all_informations();
    $this->render('admin', 'user-index', $data);
  }

  public function voirprofil(int $id) //voir ou update 
  {
    $this->load_model("User");
    $data = $this->User->get_one_user_informations($id);
    
    if(isset($_POST['firstname']) or isset($_POST['lastname']) or isset($_POST['email']) or isset($_POST['password']) or isset($_POST['role'])){

      if(isset($_POST['email'])){
          if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            array_push($message_template, 'Email non valide');
          // if($this->User->verify_email($_POST['email']) and !$data=['email'])
          //   array_push($message_template, 'Email déjà utilisé');
      }

      
    }
    
    if(isset($message_template))
      $this->render('admin', 'user-seeone', $data, $message_template);
    else 
      $this->render('admin', 'user-seeone', $data);

  }

  public function supprimerutilisateur(int $id)
  {
    $this->load_model("User");
    $data = $this->User->delete_user($id);
    $this->render('admin', 'user-index', $data);
  }
}