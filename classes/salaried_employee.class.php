<?php
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: salaried_employee.class.php
    * Description: The SalariedEmployee class 
    * represents an employee that is paid weekly
    */
    class SalariedEmployee extends Employee{
        // member variables
        private $weekly_salary;

        // constructor
        public function __construct(Person $person, $ssn, $weekly_salary){
            // call the parent constructor
            parent::__construct($person, $ssn);
            
            // set the member variables
            $this->weekly_salary = $weekly_salary;
        }
        
        // getter method to return weekly salary
        public function getWeeklySalary(){
            return number_format($this->weekly_salary, 2);
        }

        // getter method to return the amount to be paid
        public function getPaymentAmount(){
            return number_format($this->getWeeklySalary(), 2);
        }

        // method to convert class members to printable string
        public function toString(){
            return parent::toString() .
            "Weekly salary: $" . $this->getWeeklySalary() .
            "<br>Earning: $" . $this->getPaymentAmount() . "<br>";
        }
    }