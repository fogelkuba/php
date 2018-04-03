<?php

class Customer
{
    public static $numberOfCustomers = 0;
    public function __construct(){
        self::$numberOfCustomers++;
    }
}

 ?>
