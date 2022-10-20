<?php
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: employee.class.php
    * Description: The Employee class is an abstract 
    * class that stores information about a particular employee
    */
    abstract class Employee implements Payable{
        // member variables
        private $person, $ssn;
        private static $employee_count = 0;

        // constructor
        public function __construct(Person $person, $ssn){
            // set the member variables
            $this->person = $person;
            $this->ssn = $ssn;

            // increment the counter
            self::$employee_count++;
        }

        // getter method to return the person object
        public function getPerson(){
            return $this->person;
        }

        // getter method to return the employee's ssn
        public function getSSN(){
            return $this->ssn;
        }

        // getter method to return the employee count
        public static function getEmployeeCount(){
            return self::$employee_count;
        }

        // method to convert the employee class to a printable string
        public function toString(){
            return "Name: " . $this->getPerson()->toString() . 
            "<br>Social security number: " . $this->getSSN()  . "<br>";
        }


    }