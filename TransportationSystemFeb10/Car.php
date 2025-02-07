<?php

class Car extends Vehicle{
    private float $fuelEfficiency;
    function __construct(string $vehicleId, string $model, float $fuelLevel, float $fuelEfficiency)
    {
        parent::__construct($vehicleId, $model, $fuelLevel);
        $this->fuelEfficiency = $fuelEfficiency;
    }
    public function __getFuelEfficiency():float{
        return $this->fuelEfficiency;
    }
    public function __setFuelEfficiency($fuelEfficiency):void{
        $this->fuelEfficiency = $fuelEfficiency;
    }
    public function calculateRange(){
        return $this->__getFuelLevel()*$this->__getFuelEfficiency();
    }
}

$Sedan = new Car("C001","Sedan",50,15);
$Sedan->refuel(200);
$transportationManager = new TransportationManager();
$transportationManager->operateVehicle($Sedan);