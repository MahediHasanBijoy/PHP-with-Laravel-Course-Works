<?php
/**
 * In PHP, the final keyword is used to declare a class, method or property as "final". When a class or method is marked as final, it cannot be extended or overridden by any other class or method. Similarly, when a property is marked as final, its value cannot be changed once it is set.
 */

class MyClass{
    final public function finalMethod(){
        echo "hello wolrd";
    }
}

class SubClass extends MyClass{
    public function finalMethod(){
        echo "this method will give fatal error";
    }
}