<?php

class Doctor extends MedicalPersonnel{
    private string $specialization; //medical field * cardiologist,etc
    public function __construct(string $name, string $employeeId,string $specialization)
    {
        parent::__construct($name, $employeeId);
        $this->specialization = $specialization;
    }
    public function getSpecialization():string{
        return $this->specialization;
    }
    public function __setSpecialization($specialization):void{
        $this->specialization = $specialization;
    }
    public function performDuties():string{
        return "Doctor ".$this->__getName()." Diagnoses patients, prescribes medication, and conducts surgeries";
    }
}