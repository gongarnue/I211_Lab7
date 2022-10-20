<?php
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: hourly_employee.class.php
    * Description: The HourlyEmployee class represents an employee
    * that is paid by the hour
    */

    class HourlyEmployee extends Employee{
        // member variables
        private $wage, $hours;

        // constructor
        public function __construct(Person $person, $ssn, $wage, $hours){
            // call the parent constructor
            parent::__construct($person, $ssn);

            // set the remaining member variables
            $this->wage = $wage;
            $this->hours = $hours;
        }

        // getter method to return the wage
        public function getWage(){
            return number_format($this->wage, 2);
        }

        // getter method to return the number of hours
        public function getHours(){
            return $this->hours;
        }

        // method to calculate the payment amount
        public function getPaymentAmount(){
            //if the employee worked more than 40 hours calculate pay with over time
            if($this->hours > 40){
                $amount = ($this->wage * 40) + ($this->wage * ($this->hours - 40) * 1.5);
                return number_format($amount, 2);
            }

            else{
                return number_format($this->wage * $this->hours, 2);
            }
            
            
        }

        // method to convert class members to printable string
        public function toString(){
            return parent::toString() .
            "Wage per hour: $" . $this->getWage() .
            "<br>Hours: " . $this->getHours() .
            "<br>Earning: $" . $this->getPaymentAmount()  . "<br>";
        }
    }