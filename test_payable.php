<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    
    /*
    * Author: Yash Patel and Abraham Johnson
    * Date: 16th October 2022
    * Name: test_payable.php
    * Description: This script tests the functionality of the classes created
    */

    
    // autoload the classes
    require_once "autoloading.php";

    // persons
    $p1 = new Person("John", "Smith");
    $p2 = new Person("Karen", "Price");
    $p3 = new Person("Sue", "Jones");
    $p4 = new Person("Bob", "Lewis");

    // invoices
    $inv1 = new Invoice("01234","seat",2, 375);
    $inv2 = new Invoice("56789","tire",4, 79.95);

    // employee objects
    $se = new SalariedEmployee($p1, "111-11-1111", 800);

    $he = new HourlyEmployee($p2, "222-22-2222", 16.75, 40);

    $ce = new CommissionEmployee($p3, "333-33-3333", 10000,0.06);

    $bce = new BasePlusCommissionEmployee($p4, "444-44-4444",5000, 0.04, 300);

    // displaying to the user
    echo "****************************************************************<br>";
    echo "<strong>Invoice:</strong><br>";
    echo $inv1->toString();

    echo "****************************************************************<br>";
    echo "<strong>Invoice:</strong><br>";
    echo $inv2->toString();

    echo "****************************************************************<br>";
    echo "<strong>Salaried Employee:</strong><br>";
    echo $se->toString();

    echo "****************************************************************<br>";
    echo "<strong>Hourly Employee:</strong><br>";
    echo $he->toString();

    echo "****************************************************************<br>";
    echo "<strong>Commission Employee:</strong><br>";
    echo $ce->toString();

    echo "****************************************************************<br>";
    echo "<strong>Base Plus Commission Employee:</strong><br>";
    echo $bce->toString();

    echo "****************************************************************<br>";
    echo "Number of invoices: " . Invoice::getInvoiceCount() . "<br>";
    echo "Number of employees: " . Employee::getEmployeeCount() . "<br>";

    echo "****************************************************************<br>";