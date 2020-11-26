<?php

class Car {
  public $model;
  public $seats;
  public $seatedPassengers = array();

  public function __construct($model, $seats) {
    $this->model = $model;
    $this->seats = $seats;
  }

  public function sit($passengers) {
    $this->seatedPassengers[] = $passengers;
  }

  public function getPassengers() {
    return $this->seatedPassengers;
  }

  }




 ?>
