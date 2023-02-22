<?php
/* 
HOMEWORK FROM SUPPORT CLASS
Write a PHP class definition for Product that includes the following:
Private properties for name, price, and description.
A public constructor method that accepts values for name, price, and description and sets them as the corresponding properties.
*/

class Product{
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description)
    {
        $this->name         = $name;
        $this->price        = $price;
        $this->description  = $description;
    }
}