<?php
/* 
    Employee class holds the information about an employee and some methods to modify them and a display_info method to show the employee info
*/

class Employee{
    public $name;
    public $age;
    public $designation;

    public function __construct($name, $age, $designation)
    {
        $this->name         = $name;
        $this->age          = $age;
        $this->designation  = $designation;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_age(){
        return $this->age;
    }

    public function get_designation(){
        return $this->designation;
    }

    public function set_name($name){
        $this->name = $name;
    }

    public function set_age($age){
        $this->age = $age;
    }

    public function set_designation($designation){
        $this->designation = $designation;
    }

    public function display_info(){
        echo "{$this->name} is {$this->age} years olds and he is a {$this->designation} of this company";
    }
}

// employee1 obj
$employee = new Employee("Masud", 30, "Manager");

// display employee info
$employee->display_info();

echo "\n";

// set employee info
$employee->set_age(33);
$employee->set_designation("CTO");

// display updated info
$employee->display_info();


// get employee name
echo "\n".$employee->name;