<?php

class Car {
  var $model;
  var $seats;
  var $seatedPassenger1;
  var $seatedPassenger2;
  var $seatedPassenger3;

  public function __construct($model, $seats) {
    $this->model = $model;
    $this->seats = $seats;
  }

  public function sit1($passenger1) {
    $this->seatedPassenger1 = $passenger1;
  }

  public function sit2($passenger1, $passenger2) {
    $this->seatedPassenger1 = $passenger1;
    $this->seatedPassenger2 = $passenger2;
  }

  public function sit3($passenger1, $passenger2, $passenger3) {
    $this->seatedPassenger1 = $passenger1;
    $this->seatedPassenger2 = $passenger2;
    $this->seatedPassenger3 = $passenger3;
  }

  public function getPassenger1() {
    return $this->seatedPassenger1;
  }

  public function getPassenger2() {
    return $this->seatedPassenger2;
  }

  public function getPassenger3() {
    return $this->seatedPassenger3;
  }

  }

 ?>
