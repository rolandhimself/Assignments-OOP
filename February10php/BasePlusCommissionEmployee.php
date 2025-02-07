<?php

class BasePlusCommissionEmployee extends CommissionEmployee{
    private float $baseSalary;
    //constructors
    function __construct(string $firstName, string $lastName, string $socialSecurityNumber, float $grossSales, float $commissionRate, float $baseSalary)
    {
        parent::__construct($firstName, $lastName, $socialSecurityNumber, $grossSales, $commissionRate);
        $this->baseSalary = $baseSalary;
    }
    //getter and setter
    public function getBaseSalary(): float{
        return $this->baseSalary;
    }
    public function setBaseSalary(float $newSalary): void{
        if ($newSalary<0){
            throw new InvalidArgumentException("Salary can't be negative");
        }
        $this->baseSalary = $newSalary;
    }
    function earnings(): float
    {
      return  $this->getBaseSalary() + ($this->getGrossSales()*$this->getCommissionRate());
    }
    public function display()
    {
        parent::display()."\nBase Salary is $".$this->baseSalary;
    }


}

$Ama = new BasePlusCommissionEmployee("Ama",
    "Stat",
    "547-222",
    200.00,
    0.47,
    2500.00);
$Ama->earnings();
$Ama->setBaseSalary(5900.00);
print "Ama's new earnings are $".$Ama->earnings();
