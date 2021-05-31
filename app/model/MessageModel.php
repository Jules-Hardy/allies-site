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

  public function send_message($id, $user, $message){
    /*
      :idt
      :ids
      :content
    */
    $sql = "INSERT INTO " . $this->table . "(id,id_ticket,id_sender,content,sent_date) VALUES (0, :idt, :ids, :content, NOW())";
    $stmt = $this->conn->prepare($sql);
    $res = $stmt->execute([
      ":idt" => $id,
      ":ids" => $user["id"],
      ":content" => $message
      ]);

      $sql = "UPDATE ticket SET is_answered=1 WHERE id=:id";
      $stmt = $this->conn->prepare($sql);
      $res = $stmt->execute([
        ":id" => $id
      ]);

      return $res;
  }

}
