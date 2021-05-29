<?php

namespace App\Model;
use \App\Utils\Roles;

class UserModel extends AbstractModel {
  
  public function __construct()
    {
        $this->table = "user";
        $this->id_column = "NSS";
        $this->get_connection();
        return true;
    }
  
    public function get_user_for_credentials($mail, $password){
      $users = $this->get_all_informations();
      $hashed = hash("tiger192,3", $password);
      echo $hashed, PHP_EOL;
      foreach($users as $u){
        if($u["email"] == $mail && hash("tiger192,3", $password) == $u["password"])return $u;
      }
      return NULL;
    }

    public function get_all_informations() : Array {
      $sql = "SELECT * FROM " . $this->table;
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
  }

  public function get_one_user_informations($id) : Array {
    $sql = "SELECT * FROM user as u WHERE u.id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function delete_user($id) : Array {
    $sql = "DELETE FROM user WHERE id=:id";
    try { $stmt = $this->conn->prepare($sql); }
    catch(Exception $e) { echo "error";}
    $stmt->execute([":id" => $id]);  
  }

  public function doesEmailExists($mail){
    $u = $this->get_all_informations();
    foreach($u as $user){
      if($user["email"] == $mail)return TRUE;
    }
  }

  public function create_user($firstname, $lastname, $mail, $pass, $sexe){
    $sql = "INSERT INTO " . $this->table . "(id,email,password,firstname,lastname,role,create_time,is_active) VALUES(:id,:email,:password,:firstname,:lastname,:role,CURRENT_TIMESTAMP,1)";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(
      [
        ":id" => 0,
        ":email" => $mail,
        ":password" => $pass,
        ":firstname" => $firstname,
        ":lastname" => $lastname,
        ":role" => 0
      ]
    );
    return TRUE;
  }

  public function logout(){
    $this->_internalCheckSession();
    unset($_SESSION["loggedUser"]);
  }
  
  public function get_logged_user_if_exists(){
    $this->_internalCheckSession();
    
    if(!isset($_SESSION["loggedUser"]))
      return NULL;
    
    $mail = $_SESSION["loggedUser"]["email"];
    $pass = $_SESSION["loggedUser"]["password"];
    $users = $this->get_all_informations();
    foreach($users as $u){
      $um = $u["email"];
      $up = $u["password"];
      if($um === $mail && $up === $pass){
        return $u; 
      }
    }
    return NULL;
  }

  public function _internalCheckSession(){
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }

  public function get_five_last_registered_users(){
    $sql = "SELECT * FROM " . $this->table . " ORDER BY create_time DESC LIMIT 5";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  public function updateUser($id, $firstname, $lastname, $email, $password, $role){
    $updatePassword = $password != "**********";
    $sql = "UPDATE " . $this->table . " SET email=:email,firstname=:firstname,lastname=:lastname,role=:role" . ($updatePassword ? ",password=:password" : "") . " WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $updArr = [];
    $hashed = hash("tiger192,3", $password);

    if($updatePassword)
      $stmt->execute([
        ":email" => $email,
        ':firstname' => $firstname,
        ":lastname" => $lastname,
        ":role" => Roles::get_id_from_name($role),
        ":password" => $hashed,
        "id:" => $id
      ]);
    else
      $stmt->execute([
        ":email" => $email,
        ':firstname' => $firstname,
        ":lastname" => $lastname,
        ":role" => Roles::get_id_from_name($role),
        ":id" => $id
      ]);

      return TRUE;
  }
}
