<?php
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: commission_employee.class.php
    * Description: The CommissionEmployee class represents an employee that is 
    * paid by the commission
    */

    class CommissionEmployee extends Employee{
        // member variables
        private $sales, $commission_rate;
        
        // constructor
        public function __construct(Person $person, $ssn, $sales, $commission_rate){
            // call the parent constructor
            parent::__construct($person, $ssn);
            
            // set the member variables
            $this->sales = $sales;
            $this->commission_rate = $commission_rate;
        }

        // getter method to return the sales
        public function getSales(){
            return $this->sales;
        }

        // getter method to return the commission rate
        public function getCommissionRate(){
            return number_format($this->commission_rate, 2);
        }

        // method to calculate the amount to be paid
        public function getPaymentAmount(){
            return number_format($this->sales * $this->commission_rate, 2);
        }

        // method to return the member variables as string
        public function toString(){
            return parent::toString() .
            "Gross sale: $" . $this->getSales() .
            "<br>Commission rate: " . $this->getCommissionRate() .
            "<br>Earning: $" . $this->getPaymentAmount()  . "<br>";
        }
    }