<?php

namespace App\Model;

class TestModel extends AbstractModel {
  
  public function __construct()
    {
        $this->table = "test";
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

  public function get_one_sensor_informations($id) : Array {
    $sql = "SELECT * FROM " . $this->table . " as s WHERE s.id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function get_five_last_tests(){
    $sql = "SELECT * FROM " . $this->table . " ORDER BY id DESC LIMIT 5";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }
}
