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

echo "<br> The ", $car3->model, " has space for ", $car3->seats, ". Who shall ride? <br>" ;

$car3->sit3($passenger1, $passenger2, $passenger3);
echo $car3->getPassenger1();
echo ". Plus his old buddy, ";
echo $car3->getPassenger2();
echo ". And we couldn't be so cruel as to forget ";
echo $car3->getPassenger3();

echo "<br> <br> But what if we want to hack them?";
echo "<br> Well, FYI, $passenger1 unlocks his phone with $passenger1->password.";
echo "<br> $passenger2 throws the word $passenger2->password around a hell of a lot - take that as you wish.";
echo "<br> And $passenger3 doesn't go a day without his $passenger3->password. <br>Clues clues clues.";

?>


   </body>
 </html>
