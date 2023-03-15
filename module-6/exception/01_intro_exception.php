<?php

// In PHP, an exception is a way to handle errors that occur during the execution of a program. Exceptions allow you to catch and handle errors in a more controlled way than traditional error handling techniques like error codes or warnings.

// To use exceptions in PHP, you can use the try, catch, and throw statements:

// The try statement contains the code that might throw an exception.\
// The catch statement contains the code that handles the exception if it occurs.
// The throw statement is used to explicitly throw an exception.


class Student{
    public $name, $age;
    public function __construct($name, $age){
        $this->name = $name;
        if($age <5){
            throw new Exception("Too young to be a student.\n");
        }else if($age >35){
            throw new Exception("Too old to be a student.\n");
        }else{
            $this->age = $age;
        }
    }
}

try{
    $std1 = new Student("Rahim", 6);
    echo "You are a  student.\n";
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "Never stop learning.\n";
}
