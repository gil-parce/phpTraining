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
    $limit = "Too many passengers. No can do. ";
        if (count($this->seatedPassengers) < $this->seats) {
        $this->seatedPassengers[] = $passenger;
        } else {
            echo $limit;
        }
  }


  // no arguments. This method returns all passengers
  // within the function, define $limit as a simple string
  // create if-else:
    // if passengers fit in the car, return $seatedPassengers to then echo the passenger names
    // otherwise, echo the $limit string
  public function getPassengers() {
    return $this->seatedPassengers;
  }

}

 ?>
