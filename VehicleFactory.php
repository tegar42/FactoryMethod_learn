<?php
include_once("Vehicle.php");

class VehicleFactory
{
    public static function createCar($type, $transmission)
    {
        return new Car($transmission, $type);
    }

    public static function createBike($type, $engineType)
    {
        return new Bike($engineType, $type);
    }

    public static function createAutoGearCar($type)
    {
        return new Car("Auto Gear", $type);
    }
}
