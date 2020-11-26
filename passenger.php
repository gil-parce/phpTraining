<?php

class Passenger {
    var $username;
    var $password;

    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }

    public function __toString() {
      return "Passenger: $this->username";
    }

}



 ?>
