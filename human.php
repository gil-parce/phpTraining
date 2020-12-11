<?php

class Human {
    var $username;
    var $password;

    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }

    public function __toString() {
      return "Occupant: ". $this->username . ". ";
    }

}

 ?>
