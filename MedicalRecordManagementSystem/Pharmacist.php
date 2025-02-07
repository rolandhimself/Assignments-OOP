<?php

class Pharmacist extends MedicalPersonnel
{
    private string $specialization;
    public function performDuties():string{
        return "Doctor ".$this->__getName()." Prescribes and dispenses medication";
    }

    public function getSpecialization(): string{
        return $this->specialization;
    }
}