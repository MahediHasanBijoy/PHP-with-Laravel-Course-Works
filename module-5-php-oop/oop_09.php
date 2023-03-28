<?php

// magic methods __get($propName), __set($propName, $propValue)

class Student{
    private $name, $age, $class;

    public function __construct($name="", $age="", $class="")
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // // getter methods
    // public function getName(){
    //     return $this->name;
    // }
    // public function getAge(){
    //     return $this->age;
    // }
    // public function getClass(){
    //     return $this->class;
    // }

    // // setter methods
    // public function setName($name){
    //     $this->name = $name;
    // }
    // public function setAge($age){
    //     $this->age = $age;
    // }
    // public function setClass($class){
    //     $this->class = $class;
    // }

    // all getter methods using __get() magic method
    public function __get($prop)
    {
        return $this->$prop;
    }

    // all setter methods using __set() magic method
    public function __set($prop, $val){
        $this->$prop = $val;
    }
}

$a = new Student();

// $a->setName("rahim");
// echo $a->getName();

$a->name = "Jack";
echo $a->name;

$a->age = 29;
echo $a->age;