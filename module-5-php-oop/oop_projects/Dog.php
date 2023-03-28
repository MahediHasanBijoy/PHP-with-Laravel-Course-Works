<?php
/*
In this example, we create a Dog class with three properties: $name, $breed, and $age. We also define a constructor method to set the values of these properties when a new object is created.
We also define two additional methods: bark() and get_info(). The bark() method simply echoes out "Woof woof!", while the get_info() method echoes out the dog's name, breed, and age.
We then create two Dog objects, $dog1 and $dog2, with different values for the properties. We call the bark() and get_info() methods on each object to see the output.
*/ 

class Dog{
    public $name;
    public $breed;
    public $age;

    public function __construct($name, $breed, $age)
    {
        $this->name     = $name;
        $this->breed    = $breed;
        $this->age      = $age;
    }

    public function bark(){
        echo "Woof woof!\n";
    }

    public function get_info(){
        echo "name: {$this->name}, breed: {$this->breed}, age: {$this->age}\n";
    }
}

$dog1 = new Dog("Rambo", "german shepherd", 3);
$dog2 = new Dog("Jacky","husky", 2);

$dog1->bark();
$dog1->get_info();

$dog2->bark();
$dog2->get_info();

