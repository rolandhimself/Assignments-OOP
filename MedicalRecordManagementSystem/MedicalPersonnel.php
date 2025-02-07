<?php

abstract class MedicalPersonnel{
    private string $name;
    private string $id;
    public function __construct(string $name,string $employeeId){
        $this->name = $name;
        $this->id = $employeeId;
    }
    //getters and setters
    public function __getName():string{
        return $this->name;
    }
    public function __getEmployeeId():string{
        return $this->id;
    }
    public function __setName($name):void{
        $this->name = $name;
    }
    public function __setEmployeeId($EmployeeId):void{
        $this->id = $EmployeeId;
    }
    //methods
   public abstract function performDuties();
   public abstract function getSpecialization();
   public function displayDetails(){
       print "Employee's name is ".$this->name."and employee's id is ".$this->id;
   }
}

$DrAbena = new Doctor("Abena Kyei",222,"Optometry");
$NurseAma = new Nurse("Ama Yeboah",225,"oncology");
$DrKojo = new Pharmacist("Kojo Ben",226);

$DrAbena->displayDetails();
$NurseAma->displayDetails();
$DrKojo->displayDetails();

$DrAbena->performDuties();
$NurseAma->performDuties();
$DrKojo->performDuties();

$DrAbena->getSpecialization();
$NurseAma->getSpecialization();
$DrKojo->getSpecialization();