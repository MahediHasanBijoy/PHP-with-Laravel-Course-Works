<?php

// use of constructor

class Human{
    public $name;
    public $age;

    public function __construct($personName, $personAge=0){
        $this->name = $personName;
        $this->age = $personAge;
    }

    public function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }    

    public function sayName(){
        if($this->age){
            echo "My name is {$this->name}, I am {$this->age} years old\n";
        }else{
            echo "My name is {$this->name}, I don't know my age\n";
        }
    }
}

$h1 = new Human("Messi", 33);

$h1->sayHi();

$h2 = new Human("Neymar");

$h2->sayHi();