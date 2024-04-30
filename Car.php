<?php
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
