<?php

class Car {
  public $model;
  public $seats;
  public $seatedPassengers = array(); // creates an array called $seatedPassengers as a field in the class

  public function __construct($model, $seats) {
    $this->model = $model;
    $this->seats = $seats;
  }

  // defines a function with 1 argument - sits a single passenger to be placed in the array seatedPassengers
  public function sit($passenger) {
    $this->seatedPassengers[] = $passenger;
  }

  // no arguments. This method returns all passengers
  public function getPassengers() {
    return $this->seatedPassengers;
  }

}




 ?>
