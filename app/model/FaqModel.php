<?php

namespace App\Model;

class FaqModel extends AbstractModel {
  
  public function __construct()
    {
        $this->table = "faq";
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

  public function get_faq($id) : Array {
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

  public function delete_faq($id){
    $sql = "DELETE FROM " . $this->table . " WHERE `id`=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetchAll();
    return $result;
  }

  public function edit_faq($id, $question, $answer){
    $sql = "UPDATE " . $this->table . " SET question=:question,answer=:answer WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $result = $stmt->execute([
      ":question" => $question,
      ':answer' => $answer,
      ":id" => $id
      ]);
    if(!$result){
      echo $result;

      echo "\n Une erreur est survenue:\n";
      echo "<pre>";
      print_r($stmt->errorInfo());
      echo "</pre>";
      die();
    }
  }
}
