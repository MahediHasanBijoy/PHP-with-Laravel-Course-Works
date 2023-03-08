<?php
// inheritance example

class Animal{
    protected $name;
    protected $sound;

    public function __construct($name, $sound)
    {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function speak(){
        echo "{$this->sound} My name is {$this->name}\n";
    }
}

class Cat extends Animal{
    public function __construct($name)
    {
        parent::__construct($name, "Meow!");
    }
}

class Dog extends Animal{
    public function __construct($name)
    {
        parent::__construct($name, "Woof!");        
    }
}

$cat = new Cat("Tom");
$cat->speak();

$dog = new Dog("Spike");
$dog->speak();