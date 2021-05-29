<?php

namespace App\Model;

class TicketModel extends AbstractModel {
  
  public function __construct()
    {
        $this->table = "ticket";
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

  public function get_ticket($id) : Array {
    $sql = "SELECT * FROM " . $this->table . " as s WHERE s.id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function get_five_last_tickets(){
    $sql = "SELECT * FROM " . $this->table . " ORDER BY id DESC LIMIT 5";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  public function delete_ticket($id){
    $sql = "DELETE FROM " . $this->table . " WHERE `id`=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetchAll();
    return $result;
  }

}
