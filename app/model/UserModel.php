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

}