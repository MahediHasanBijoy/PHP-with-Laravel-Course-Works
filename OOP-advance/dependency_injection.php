<?php
// dependency injection
// In simple terms, it means that rather than creating objects inside a class, the objects are injected into the class from outside.

interface BaseStudent{
    function displayName();
}

class Student implements BaseStudent{
    private $name;

    function __construct($name){
        $this->name = $name;
    }

    function displayName()
    {
        echo $this->name." is our regular student\n";
    }
}

class NewStudent implements BaseStudent{
    private $name;
    function __construct($name){
        $this->name = $name;
    }

    function displayName()
    {
        echo $this->name. " is our new student\n";
    }
}

// this class uses tightly coupled dependecy
/* class StudentManager{
    function introduceStudent($name){
        // creating object inside a class creates tightly coupled dependency
        $st = new Student($name);
        // if we want show new student name then we need to create another class for tightly coupled dependecy
        $st->displayName();
    }
}

$st_manager = new StudentManager();
$st_manager->introduceStudent("Bijoy"); */


// loosely couple dependency or dependecy injection
class StudentManager2{
    // inject object as a dependency
    function introduceStudent(BaseStudent $student){
        $student->displayName();
    }
}


$manager = new StudentManager2();
// display regular student name
$student = new Student("Mahedi");
$manager->introduceStudent($student);

// display new student name
$new_std = new NewStudent("Bijoy");
$manager->introduceStudent($new_std);

