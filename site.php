<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

require('car.php');
require('human.php');

$car1 = new Car("Ford", 1);
$car2 = new Car("Fiat", 2);
$car3 = new Car("Mercedes", 3);

$human1 = new Human("Isra", "IsraChino");
$human2 = new Human("Andres", "Parcero");
$human3 = new Human("Kevin", "V60");


$car1->sitDriver($human1);
echo $car1;

echo "<br>";
$car2->sitDriver($human2);
$car2->sitPassenger($human2);
echo $car2;

echo "<br>";
$car3->sitDriver($human3);
$car3->sitPassenger($human1);
$car3->sitPassenger($human2);
echo $car3;

echo "<br>";
echo "______________";
echo "<br>";
echo "<br>";

// arrays containing driving instructions
$driveShapeS = array("west", "south", "east", "south", "west");
$driveShapeI = array("south", "south");
$driveInverseI = array("north", "north");
$driveShapeC = array("westward curve", "south", "eastward curve");

$car1->programme($driveShapeC);
$car1->drive1();
echo "<br>";

$car2->programme($driveInverseI);
$car2->drive1();
echo "<br>";

$car3->programme($driveShapeI);
$car3->drive1();
echo "<br>";

$car1->setSpeed("gil");
echo "<br>";
$car2->setSpeed(7.4);
echo "<br>";
$car3->setSpeed(60);

echo "<br>";
echo "__________";
echo "<br>";

echo "<br>";
$car1->carSick($human3);

echo "<br>";
$human3->changeIdentity("Gregory");

?>


   </body>
 </html>
