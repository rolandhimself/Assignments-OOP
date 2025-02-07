package org.example;

public class BasePlusCommissionEmployee extends CommissionEmployee{
    public BasePlusCommissionEmployee(String firstName, String lastName, String socialSecurity, double grossSales, double commissionRate, double baseSalary) {
        super(firstName, lastName, socialSecurity, grossSales, commissionRate);
        setBaseSalary(baseSalary);
    }
    private double baseSalary ;

    //methods
    public double getBaseSalary() {
        return baseSalary;
    }
    public void setBaseSalary(double baseSalary) {
        if (baseSalary < 0.0) {
            throw new IllegalArgumentException ("BaseSalary cannot be negative");
        }
        this.baseSalary = baseSalary;
    }

    @Override
    public double earnings(double grossSales, double commissionRate) {
        return getBaseSalary() + super.earnings(grossSales, commissionRate);
    }
    @Override
    public String toString() {
        return "BasePlusCommissionEmployee" + "[baseSalary=]" + baseSalary + "[Employee earnings]" + earnings(getGrossSales(), getCommissionRate());
    }


}


