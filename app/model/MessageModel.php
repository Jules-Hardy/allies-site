<?php

namespace App\Model;

class MessageModel extends AbstractModel {
  
  public function __construct()
    {
        $this->table = "messages";
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

  public function get_messages($id) {
    $sql = "SELECT * FROM " . $this->table . " as s WHERE s.id_ticket=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetchAll();
    return $result;
  }

}
