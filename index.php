<?php
include_once("VehicleFactory.php");
echo "<h3 style='color: grey; font-family: sans-serif;'> FACTORY METHOD DESIGN PATTERN </h3>";

$car1 = VehicleFactory::createCar("SUV", "Auto Gear");
$car2 = VehicleFactory::createCar("Sedan", "Non-Auto Gear");
$car3 = VehicleFactory::createAutoGearCar("hatchback");

$bike1 = VehicleFactory::createBike("two-stroke engine", "gear");
$bike2 = VehicleFactory::createBike("four-stroke engine", "Non-gear");

echo "<h4 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Car Created </h4>";
echo $car1->getVehicleDetails() . "<br>";
echo $car2->getVehicleDetails() . "<br>";
echo $car3->getVehicleDetails() . "<br>";

echo "<h4 style='color: grey; font-family: sans-serif; margin-bottom: 0;'> Bike Created </h4>";
echo $bike1->getVehicleDetails() . "<br>";
echo $bike2->getVehicleDetails() . "<br>";
