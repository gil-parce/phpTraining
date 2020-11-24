<?php

class Car {
  var $model;
  var $seats;
  var $seatedPassenger1;
  var $seatedPassenger2;

  public function __construct($model, $seats) {
    $this->model = $model;
    $this->seats = $seats;
  }

  public function sit1($passenger1) {
    $this->seatedPassenger1 = $passenger1;
  }

  public function getPassenger1() {
    return $this->seatedPassenger1;
  }

  }




 ?>
