<?php

class CommissionEmployee{
    private string $firstName;
    private string $lastName;
    private string $socialSecurityNumber;
    private float $grossSales;
    private float $commissionRate;

    //constructor
    public function __construct(string $firstName, string $lastName, string $socialSecurityNumber,
                float $grossSales, float $commissionRate){
                    $this -> firstName = $firstName;
                    $this -> lastName = $lastName;
                    $this -> socialSecurityNumber = $socialSecurityNumber;
                    $this->setGrossSales($grossSales);
                    $this->setCommissionRate($commissionRate);
                }

    //getters and setters
    public function getFirstName(): string {
    return $this -> firstName;
    }
    public function getLastName(): string {
        return $this -> lastName;
    }
    public function getSocialSecurityNumber(): string {
        return $this -> socialSecurityNumber;
    }
    public function getGrossSales(): float{
        return $this -> grossSales;
    }
    public function getCommissionRate(): float{
        return $this -> commissionRate;
    }

    public function setFirstName(string $firstName){
        $this -> firstName = $firstName;
    }
    public function setLastName(string $lastName){
        $this -> lastName = $lastName;
    }
    public function setSocialSecurityNumber(string $socialSecurityNumber){
        $this -> socialSecurityNumber = $socialSecurityNumber;
    }
    public function setGrossSales(float $grossSales){
            if ($grossSales<0.00){
                throw new InvalidArgumentException("Gross Sales should be greater than 0");
            }
        $this -> grossSales = $grossSales;
    }
    public function setCommissionRate(float $commissionRate){
            if ($commissionRate<0||$commissionRate>1.0){
                throw new InvalidArgumentException("Commission Rate must be between 1 and 0");
            }
        $this -> commissionRate = $commissionRate;
    }

    public function earnings(): float
    {
        return $this->grossSales * $this->commissionRate;
    }
    public function display(){
        print ( "Employee's details are ". $this->getFirstName()." ".$this->getLastName()."\n"
            .$this->getSocialSecurityNumber()."\n".$this->getGrossSales()."\n".$this->getCommissionRate()."\n".$this->earnings()
        );
    }
}

    $Adjoa = new CommissionEmployee("Adjoa", "Stat", "537 - 222", 200.00, 0.72);
    $Adjoa->setGrossSales(500.00);
    $Adjoa->setCommissionRate(0.65);
    print "Adjoa's new sales and commission rates are : $" . $Adjoa->getGrossSales() . " and " . $Adjoa->getCommissionRate();
    print "Adjoa's earnings are $" . $Adjoa->earnings($this->grossSales,$this->commissionRate);
    $Adjoa->display();