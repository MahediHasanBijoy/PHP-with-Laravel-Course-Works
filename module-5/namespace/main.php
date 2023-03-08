<?php
namespace Cars;

include "bird.php";
include "car.php";
include "bmw.php";

$car = new Car();
$car->getName();

echo "\n";

$bmw = new Supercar\BMW();
$bmw->getName();

echo "\n";

$bird = new \Birds\Small\Humming();  // namespace from global scope
$bird->getName();

// date class is not in this namespace scope so we have to use qualified namespace 
$date = new \DateTime();