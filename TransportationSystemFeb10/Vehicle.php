<?php

abstract class Vehicle{
    private string $vehicleId;
    private string $model;
    private float $fuelLevel;
    //constructor
    function __construct(string $vehicleId,string $model, float $fuelLevel){
        $this->vehicleId = $vehicleId;
        $this->model = $model;
        $this->fuelLevel = $fuelLevel;
    }

    //getters and setters
    public function __getVehicleId():string{
        return $this->vehicleId;
    }
    public function __getModel():string{
        return $this->model;
    }
    public function __getFuelLevel():float{
        return $this->fuelLevel;
    }
    public function __setVehicleId($vehicleId):void{
        $this->vehicleId = $vehicleId;
    }
    public function __setModel($model):void{
        $this->model = $model;
    }
    public function __setFuelLevel($fuelLevel):void{
        $this->fuelLevel = $fuelLevel;
    }
    public function refuel(float $liters){
        $newLevel = $this->__getFuelLevel() + $liters;
        print $newLevel." litres";
    }
    abstract public function calculateRange();
}