<?php

/**
 * In PHP, the static keyword is used to declare class-level properties and methods. When a property or method is declared as static, it belongs to the class itself rather than any specific instance of the class. This means that the property or method can be accessed without creating an instance of the class.
 * 
 * Static properties and methods are shared across all instances of a class, so changes made to a static property or method affect all instances of the class.
 * 
 * Static properties and methods can be accessed using the self:: or static:: keywords, depending on whether you want to reference the class or its subclass.
 */

class Math{
    private $operation;
    static public $name;
    static function square($n){
        // non static methods or properties cannot use in static method with $this keyword
        self::$name = "Square";
        echo $n*$n."\n";
        
    }

    function cube($n){
        $this->operation = "Cube";
        echo $n*$n*$n. "\n";
    }

    function getOperation(){
        return $this->operation;
    }
}

Math::square(4);
echo Math::$name;

