<?php

namespace App\Model;

class UserModel extends AbstractModel {
  
  public function __construct()
    {
        $this->table = "user";
        $this->id_column = "NSS";
        $this->get_connection();
        return true;
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

}