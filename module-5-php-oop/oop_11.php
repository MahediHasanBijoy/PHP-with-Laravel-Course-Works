<?php
/* 
Object cloning in PHP is the process of creating a copy of an object. PHP provides the clone keyword to perform object cloning. When an object is cloned, PHP creates a new object with the same properties and values as the original object.
*/

class Color{
    public $color;

    public function __construct($color){
        $this->color = $color;
    }
}

class FavColor{
    public $data;
    public $color;

    public function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new Color($color);
    }

    public function setData($data){
        $this->data = $data;
    }

    public function updateColor($newColor){
        $this->color->color = $newColor;
    }

    public function __clone()
    {
        $this->color = clone $this->color;
    }
}

$obj1 = new FavColor("Some data", "red");

$obj2 = clone $obj1;

// $obj2->setData("New data");
// $obj2->color = "Blue";

$obj2->setData("new color");
$obj2->updateColor("Yellow");

print_r($obj1);
print_r($obj2);