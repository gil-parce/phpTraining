<?php

class Car {
  private $model;
  private $seats;
  private $seatedPassengers = array();
  public $seatedDriver;

  public function __construct($model, $seats) {
    $this->model = $model;
    $this->seats = $seats;
  }

  // defines a function with 1 argument - sits a single passenger to be placed in the array seatedPassengers
  // runs foreach to check if passenger is already seated
  // if alreadySeated is true, echo message
  // otherwise, go on to count the number of seated passengers
  // if passenger fits in the car, sit the passenger
// otherwise, echo the $limit string for each passenger who does not fit.
  public function sit($passenger) {
    $limit = "Too many passengers. No can do. ";
    $alreadySeated = false;
        foreach ($this->seatedPassengers as $seatedPassenger) {
                if ($seatedPassenger == $passenger) {
                    echo "Already inside. ";
                    $alreadySeated = true;
                    }
                }
       if ($alreadySeated == false) {
            if (count($this->seatedPassengers) < $this->seats) {
                $this->seatedPassengers[] = $passenger;
            } else {
            echo $limit;
            }}
    }

  public function getPassengers() {
    return $this->seatedPassengers;
  }

  public function sitDriver($human) {
          $this->seatedDriver = $human;
    }

  public function getDriver() {
    return $this->seatedDriver;
  }

  public function __toString() {
    $carInfo = "The " . $this->model . " fits " . $this->seats . ". ";
    $driverInfo = " The driver is: " . $this->seatedDriver . ". ";

// With each new passenger, append the value $passenger onto the string $carInfo
// Once there are no more passengers to seat, return the final appended string $carInfo
    foreach ($this->seatedPassengers as $passenger) {
            $carInfo = $carInfo . $passenger;
        }
        return $carInfo . $driverInfo;
  }

}

 ?>
