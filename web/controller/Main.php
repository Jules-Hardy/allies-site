<?php

require_once(ROOT . "/controller/Controller.php");
class Main extends Controller
{
  public function index(){
    $d = array();
    $d['tuto'] = array(
      'titre'=> 'Salut',
      'description' => 'Exemple de description',
    );
    $this->set($d);  //On fait passer les valeurs du tableaux au controller qui va les envoyer à la fonction render
    $this->render('accueil'); //On afficher la page 
  }
}