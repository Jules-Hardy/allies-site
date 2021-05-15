<?php

namespace App\Model ;

/**
* Class Model
*
* Abstract class for all Model class
*/
abstract class AbstractModel {

  private string $host = 'localhost';
  private string $db_name = 'website';
  private string $db_user = 'root';
  private string $db_password = 'root';

  protected $conn;

  /**
  * @var string
  * Specify the name of the table
  */
  public string $table;
  /**
  * @var string
  * Specify the name of the primary key column
  */
  public string $id_column;
  /**
  * @var string
  * Specify the id of the row
  */
  public string $id;

  public string $from;

  public function __construct()
  {}
  /**
  * Initiate a DataBase Connection using PDO
  * @return void
  */
  public function get_connection() : void {
      $this->conn = null;

      $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_password);
      $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->conn->exec("set names utf8");
  }

  /**
  * Return the row corresponding to the id;
  * @return Array
  */
  public function get_one() {
      $sql = "SELECT * FROM " . $this->table . " WHERE " . $this->id_column . "=:id";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([":id" => $this->id]);
      $result = $stmt->fetch();
      return $result;
  }

  /**
  * Return all rows of the corresponding table
  * @return Array
  */
  public function get_all() : Array {
      $sql = "SELECT * FROM " . $this->table;
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
  }

}