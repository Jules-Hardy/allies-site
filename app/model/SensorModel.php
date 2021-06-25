<?php

namespace App\Model;

class SensorModel extends AbstractModel
{

  public function __construct()
  {
    $this->table = "sensor";
    $this->id_column = "NSS";
    $this->get_connection();
    return true;
  }

  public function get_all_informations(): array
  {
    $sql = "SELECT * FROM " . $this->table;
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  public function delete($id)
  {
    $sql = "DELETE FROM `sensor` WHERE `sensor`.`id` = :id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function create($name)
  {
    $sql = "INSERT INTO " . $this->table . "(id,name,is_active) VALUES(0,:name,:is_active);";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":name" => $name, ":is_active" => 1]);
    $result = $stmt->fetch();
    return $result;
  }

  public function get_one_sensor_informations($id): array
  {
    $sql = "SELECT * FROM " . $this->table . " as s WHERE s.id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch();
    return $result;
  }

  public function get_five_last_sensors()
  {
    $sql = "SELECT * FROM " . $this->table . " ORDER BY date asc LIMIT 5";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }

  public function get_datas()
  {
    $sql = "SELECT * FROM data";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
  }
}
