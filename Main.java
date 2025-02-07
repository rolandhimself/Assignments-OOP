package org.example;

public class Main{
    public static void main(String[] args) {
        CommissionEmployee employee = new CommissionEmployee("Roland",
                "Appiah",
                "546-222",
                1000.00,
                0.85);
        String string = employee.toString();
        employee.setGrossSales(100);
        employee.setCommissionRate(0.80);
    employee.setGrossSales(2000.00);
    employee.setCommissionRate(0.97);
    System.out.println("New sales and commission rate = " + employee.getCommissionRate() + " and "
    + employee.getGrossSales());
    System.out.println("Employee's earnings " + employee.earnings(employee.getGrossSales(), employee.getCommissionRate()));

    BasePlusCommissionEmployee commissionEmployee = new BasePlusCommissionEmployee(
            "Ama",
            "Antwi",
            "547-222",
            500,
            0.60,
            700.00) ;
    commissionEmployee.setBaseSalary(1400.00);
    commissionEmployee.setCommissionRate(0.97);
    commissionEmployee.setGrossSales(1600.00);
    System.out.println("Commission Employee earns $"
            +commissionEmployee.earnings(commissionEmployee.getGrossSales(), commissionEmployee.getCommissionRate()));
    }

}