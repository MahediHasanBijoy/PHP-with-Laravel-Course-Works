<?php
/*  
Magic method: toString() 
In PHP, the __toString() method is a magic method that is automatically called when an object is treated as a string. This method allows you to define how an object should be represented as a string.
*/

class Demo{
    public function __toString()
    {
        return "hello world";
    }
}

$demo = new Demo();

echo $demo;