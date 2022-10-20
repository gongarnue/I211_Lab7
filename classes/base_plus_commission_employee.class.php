<?php
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: base_plus_commission_employee.class.php
    * Description: The BasePlusCommissionEmployee class represents an employee that is paid both by commission and base salary
    */

    class BasePlusCommissionEmployee extends CommissionEmployee{
        // member variables
        private $base_salary;

        // constructor
        public function __construct(Person $person, $ssn, $sales, $commission_rate, $base_salary){
            // call the parent constructor
            parent::__construct($person, $ssn, $sales, $commission_rate);

            // set the member variables
            $this->base_salary = $base_salary;
        }

        // getter method to return the base salary
        public function getBaseSalary(){
            return number_format($this->base_salary, 2);
        }

        // method to calculate the total amount
        public function getPaymentAmount(){
            return parent::getPaymentAmount() + $this->base_salary;
        }

        // method to convert class members to printable string
        public function toString(){
            return "Name: " . $this->getPerson()->toString() . 
            "<br>Social security number: " . $this->getSSN() .
            "<br>Gross sale: $" . $this->getSales() .
            "<br>Commission rate: " . $this->getCommissionRate() .
            "<br>Base salary: " . $this->getBaseSalary() .
            "<br>Earning: $" . $this->getPaymentAmount()  . "<br>";
        }
    }