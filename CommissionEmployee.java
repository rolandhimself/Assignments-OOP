package org.example;

public class CommissionEmployee {
    private String firstName;
    private String lastName;
    private String socialSecurity;
    private double grossSales;
    private double commissionRate;

    //constructors
    public CommissionEmployee(String firstName, String lastName, String socialSecurity,
                              double grossSales, double commissionRate) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.socialSecurity = socialSecurity;
        setGrossSales(grossSales);
        setCommissionRate(commissionRate);
    }

    //getters and setters
    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public String getSocialSecurity() {
        return socialSecurity;
    }

    public void setSocialSecurity(String socialSecurity) {
        this.socialSecurity = socialSecurity;
    }

    public double getGrossSales() {
        return grossSales;
    }

    public void setGrossSales(double grossSales) {
        if (grossSales < 0.0) {
            throw new IllegalArgumentException("Sales must exceed 0.");
        }
        this.grossSales = grossSales;
    }

    public double getCommissionRate() {
        return commissionRate;
    }

    public void setCommissionRate(double commissionRate) {
        if (commissionRate < 0.0 || commissionRate > 1.0) {
            throw new IllegalArgumentException("Commission rate must be between 0 and 1.");
        }
        this.commissionRate = commissionRate;
    }

    //earnings method
    public double earnings(double grossSales, double commissionRate) {
        return grossSales * commissionRate;
    }

    public String toString() {
        return "First Name: " + firstName +
                ", Last Name: " + lastName +
                ", Social Security Number: " + socialSecurity +
                ", Sales: "+ grossSales +
                ", Commission Rate: " + commissionRate;

    }
}
