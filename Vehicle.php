<?php
interface Vehicle
{
    public function getVehicleDetails();
}

class Car implements Vehicle
{
    private String $transmission;
    private String $type;

    public function __construct($transmission, $type)
    {
        $this->transmission = $transmission;
        $this->type = $type;
    }

    public function getVehicleDetails()
    {
        return "Type: {$this->type}, Transmission: {$this->transmission}";
    }
}

class Bike implements Vehicle
{
    private String $engineType;
    private String $type;

    public function __construct($engineType, $type)
    {
        $this->engineType = $engineType;
        $this->type = $type;
    }

    public function getVehicleDetails()
    {
        return "Type: {$this->type}, Engine Type: {$this->engineType}";
    }
}
