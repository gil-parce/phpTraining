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
$car1->sit($human1);
echo $car1;

echo "<br>";
$car2->sitDriver($human2);
$car2->sit($human3);
echo $car2;

echo "<br>";
$car3->sit($human1);
$car3->sit($human1);
$car3->sit($human3);
echo $car3;


?>


   </body>
 </html>
