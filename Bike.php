<?php
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
