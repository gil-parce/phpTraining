<?php

class Human {
    var $username;
    var $password;

    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }

    public function changeIdentity($name) {
        $this->username = $name;
        echo "The human has changed identity. It is now " . $name . ". Hello " . $name . ". Welcome to this world. ";
    }

    public function __toString() {
      return "Occupant: ". $this->username . ". ";
    }

}

 ?>
