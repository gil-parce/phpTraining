<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

require('car.php');
require('passenger.php');

$car1 = new Car("Ford", 1);
$car2 = new Car("Fiat", 2);
$car3 = new Car("Mercedes", 3);

$passenger1 = new Passenger("Isra", "IsraChino");
$passenger2 = new Passenger("Andres", "Parcero");
$passenger3 = new Passenger("Kevin", "V60");

// first runs sit($passenger) on $passenger1
// then creates a container $car1 and retrieves all passengers in object $car1 (only $passenger1)
// then prints the value of all values within this container given value $passenger (in this case, 'Isra')
$limit = "Too many passengers. No can do.";

$car1->sit($passenger1);
$car1Passengers = $car1->getPassengers();
foreach ($car1Passengers as $passenger) {
        echo $passenger;
    }

// Same process as above, but this time runs sit function on passenger1 and passenger2
echo "<br>";
$car2->sit($passenger1);
$car2->sit($passenger2);
$car2->sit($passenger3);
$car2Passengers = $car2->getPassengers();
foreach ($car2Passengers as $passenger) {
        echo $passenger;
    }

echo "<br>";
$car3->sit($passenger1);
$car3->sit($passenger2);
$car3->sit($passenger3);
$car3Passengers = $car3->getPassengers();
foreach ($car3Passengers as $passenger) {
        echo $passenger;
    }


?>


   </body>
 </html>
