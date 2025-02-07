<?php

class Nurse extends MedicalPersonnel{
    private string $department;
    public function __construct(string $name, string $employeeId,string $department)
    {
        parent::__construct($name, $employeeId);
        $this->department = $department;
    }
    public function performDuties():string{
       return "Nurse ".$this->__getName()." provides patient care, administers medications, and assists doctors.";
    }

    public function getSpecialization():string{
        return $this->department;
    }
}