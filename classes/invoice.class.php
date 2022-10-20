<?php
     /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: invlice.class.php
    * Description: The Invoice class represents an invoice and contains 
    * methods to calculate the total amount and to display the details to the user
    */
    class Invoice implements Payable{
        // member variables
        private $part_number;
        private $part_sescription;
        private $quantity;
        private $price_per_item;
        
        // static counter variable
        private static $invoice_count = 0;


        // constructor
        public function __construct($part_number, $part_description, $quantity, $price_per_item){
            // set the properties
            $this->part_number = $part_number;
            $this->part_sescription = $part_description;
            $this->quantity = $quantity;
            $this->price_per_item = $price_per_item;
            
            // increment the counter
            self::$invoice_count++;
        }

        // getter method to return the part number
        public function getPartNumber(){
            return $this->part_number;
        }

        // getter method to return the part description
        public function getPartDescription(){
            return $this->part_sescription;
        }

        // getter method to return the quantity
        public function getQuantity(){
            return $this->quantity;
        }

        // getter method to return the price per item
        public function getPricePerItem(){
            return number_format($this->price_per_item, 2);
        }

        // this method calculates the total amount by multiplying the 
        // price per item with quantity
        public function getPaymentAmount(){
            return number_format($this->price_per_item * $this->quantity, 2);
        }

        // getter method that returns the number of times the Invoice class has been instantiated
        public static function getInvoiceCount(){
            return self::$invoice_count;
        }

        // method to convert class members to printable string
        public function toString(){
            return "Part Number: " . $this->getPartNumber() . "(" . $this->getPartDescription() . ")" .
            "<br>Quantity: " . $this->getQuantity() .
            "<br>Price per item: $" . $this->getPricePerItem() .
            "<br>Payment: $" . $this->getPaymentAmount() . "<br>";
        }
    }