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
  public function sitPassenger($passenger) {
    $limit = "Too many passengers. No can do. ";
    $alreadySeated = false;
    $seatedElsewhere = false;
        foreach ($this->seatedPassengers as $seatedPassenger) {
                if ($seatedPassenger == $passenger) {
                    echo "Already inside. ";
                    $alreadySeated = true;
                    }
        }

        if ($passenger == $this->seatedDriver) {
            echo "Drivers can't be passengers, dumbass. ";
            $seatedElsewhere = true;
        }

       if ($alreadySeated == false && $seatedElsewhere == false) {
            if (count($this->seatedPassengers) + 1 < $this->seats) {
                $this->seatedPassengers[] = $passenger;
            } else {
            echo $limit;
            }
       }
    }

  public function getPassengers() {
    return $this->seatedPassengers;
  }

  // Make sure no other driver
  // And driver is not seated as passenger and vice versa
  public function sitDriver($human) {
    $seatedElsewhere = false;
    $alreadySeated = false;
        foreach ($this->seatedPassengers as $seatedPassenger) {
                if ($seatedPassenger == $human) {
                    echo "Already inside. ";
                    $alreadySeated = true;
                    }
                }

                if ($human == $this->seatedDriver) {
                    echo "Drivers can't be passengers, dumbass. ";
                    $seatedElsewhere = true;
                }

        if ($seatedElsewhere == false && $alreadySeated == false) {
            $this->seatedDriver = $human;
            }
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
