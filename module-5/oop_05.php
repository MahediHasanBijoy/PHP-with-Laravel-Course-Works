<?php
/**
 * In PHP, an abstract class is a class that cannot be instantiated, which means you cannot create an object of that class directly. Instead, it serves as a blueprint for other classes to inherit from and define their own methods and properties.
 */

abstract class Shape{
    protected $color;

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }

    abstract function getArea();
}

class Circle extends Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function getArea(){
        return pi()* pow($this->radius, 2);
    }
}

class Rectangle extends Shape{
    private $base;
    private $height;

    public function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(){
        return $this->base * $this->height;
    }

}

$circle = new Circle(10);
echo $circle->getArea();

echo "\n";

$rect = new Rectangle(20,20);
echo $rect->getArea();

echo "\n";
$rect->setColor("Blue");
echo $rect->getColor();