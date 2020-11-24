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

echo "The ", $car1->model, " has space for ", $car1->seats, ". Who shall ride? <br>" ;

$car1->sit1($passenger1);
echo $car1->getPassenger1();

echo "<br> The ", $car2->model, " has space for ", $car2->seats, ". Who shall ride? <br>" ;

$car2->sit2($passenger1, $passenger2);
echo $car2->getPassenger1();
echo ". And don't forget his friend, ";
echo $car2->getPassenger2();


?>


   </body>
 </html>
