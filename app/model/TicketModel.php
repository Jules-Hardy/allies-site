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

  public function create_ticket($title, $content, $log){
    $sql = "INSERT INTO ticket(id,id_author,status,subject,create_date,is_answered) VALUES(0,:ida,1,:subject,NOW(),0); SET @LASTID = SCOPE_IDENTITY()";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      ":ida" => $log['id'],
      ":subject" => $title
    ]);
    
    $li = $this->conn->lastInsertId();
    if(!$li){
      header("Location: /");
      return;
    }

    $sql = "INSERT INTO messages(id,id_ticket,id_sender,content,sent_date) VALUES(0,:idt,:ids,:content,NOW()); SET @LASTID = SCOPE_IDENTITY()";
    $stmt = $this->conn->prepare($sql);
    $res = $stmt->execute([
      ":idt" => $li,
      ":ids" => $log["id"],
      ":content" => $content
    ]);

    return $res;
  }

}
