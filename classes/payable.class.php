<?php
     /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: payable.class.php
    * Description: The Payable interface contains method that must
    * be implemented by the classes that implement it
    */
    interface Payable{
        public function getPaymentAmount();
        public function toString();
    }