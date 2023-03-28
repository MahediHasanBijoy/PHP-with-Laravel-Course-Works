<?php

/**
 * In PHP, an interface is a blueprint for a class or a set of classes that defines a list of public methods that the classes implementing the interface must have.
 * 
 * 
 */
 

interface BaseAnimal{
    public function isAlive();
    public function canEat($param1, $param2);
    public function breed();
}

class Animal implements BaseAnimal{
    public function isAlive(){}
    public function canEat($param1, $param2){}
    public function breed(){}
}


// interface can extends other interface 
interface BaseHuman extends BaseAnimal{
    public function canTalk();
}


class Human implements BaseHuman{
    public function isAlive(){}
    public function canEat($param1, $param2){}
    public function breed(){}
    public function canTalk(){}
}

$h = new Human();

// to check if an object is an instance of a class or interfaces
echo $h instanceof BaseAnimal;

$cat = new Animal();

echo $cat instanceof Animal;






