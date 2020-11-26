<?php

class Car {
  public $model;
  public $seats;
  public array($seatedPassengers);

  public function __construct($model, $seats, $seatedPassengers) {
    $this->model = $model;
    $this->seats = $seats;
    $this->seatedPassengers = $seatedPassengers();
  }

  public function sit($passengers) {
    $this->seatedPassengers = $passengers;
  }

  public function getPassengers() {
    return $this->seatedPassengers;
  }

  }




 ?>
