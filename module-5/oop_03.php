<?php
// scope of parent class and child class 

class ParentClass{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi(){
        echo "hello I am parent class method\n";
    }
}

class ChildClass extends ParentClass{
    
    public function sayHi(){
        parent::sayHi();
        echo "hello, I am child class method\n";
    }
}

$child = new ChildClass("bijoy");
