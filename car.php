<?php

class Car {
  private $model;
  private $seats;
  private $seatedPassengers = array();
  private $seatedDriver;
  private $directions = array();
  private $direction;

  public function __construct($model, $seats) {
    $this->model = $model;
    $this->seats = $seats;
  }

  public function sitPassenger($passenger) {
    $limit = "Too many passengers. No can do. ";

       $isHumanNotInCarYet = $this->humanNotInCarYet($passenger);

       if ($isHumanNotInCarYet) {
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

  public function sitDriver($human) {

       $isHumanNotInCarYet = $this->humanNotInCarYet($human);

        if ($isHumanNotInCarYet) {
            $this->seatedDriver = $human;
            }
    }

  public function getDriver() {
    return $this->seatedDriver;
  }

  public function drive($direction) {
    echo "The car has driven: " . $direction . ". ";
  }

  public function programme($direction) {
    $this->directions = $direction;
    echo "Oído. ";
    }

  public function drive1() {
    foreach ($this->directions as $direction) {
        echo "The " . $this->model . " has driven: " . $direction . ". ";
        }
  }

  public function setSpeed ($speed) {
    if (is_numeric($speed)) {
        echo "The " . $this->model . " is driving at " . $speed . " mph. ";
        if ($speed < 30) {
                echo "Please speed the fuck up a touch. ";
            } elseif ($speed >= 60) {
                echo "Please slow the fuck down. ";
            } else {
                echo "The current velocity does not overly concern me. ";
            }
    } else {
        echo "That is not a valid speed. ";
    }
  }

  public function carSick($passenger) {
    if ($this->seatedPassenger == $passenger) {
                echo $passenger . " is car sick. There's vomit everywhere.";
            } elseif ($this->seatedDriver == $passenger) {
                echo $passenger . " is the driver. Drivers don't tend to get car sick.";
            } else {
                echo $passenger . " is not a passenger in the " . $this->model . " and so cannot puke in this vehicle.";
            }
  }

  public function __toString() {
    $carInfo = "The " . $this->model . " fits " . $this->seats . ". ";
    $driverInfo = " The driver is: " . $this->seatedDriver . ". ";

    foreach ($this->seatedPassengers as $passenger) {
            $carInfo = $carInfo . $passenger;
        }
        return $carInfo . $driverInfo;
  }

  private function humanNotInCarYet($human) {
     $alreadySeated = false;
     $seatedElsewhere = false;

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
            return true;
        } else {
            return false;
        }
    }

}

 ?>
