<?php
 
namespace App\Utils;
class Roles{
  const USER = 0;
  const GESTIONNAIRE = 1;
  const ADMINISTRATOR = 2;

  public static function get_role_name_for_id($id){
    if($id == 0)
      return "Utilisateur";
    else if($id == 1)
      return "Gestionnaire";
    else if($id == 2)
      return "Administrateur";
    else 
      return "Erreur.";
    }
}