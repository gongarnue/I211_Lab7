<?php
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: person.class.php
    * Description: The Person class stores the first name and last name
    * of an individual and contains getter methods to return this information
    */
    
    class Person{
        // member variables
        private $first_name, $last_name;

        // constructor
        public function __construct($first_name, $last_name){
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }

        // getter method to return the first name
        public function getFirstName(){
            return $this->first_name;
        }

        // getter method to return the last name
        public function getLastName(){
            return $this->last_name;
        }

        // method to convert the class members to a printable string
        public function toString(){
            return $this->first_name . " " . $this->last_name;
        }

    }