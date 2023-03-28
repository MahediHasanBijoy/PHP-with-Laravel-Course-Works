<?php
// Pass by value - The function copies the variable and works with a copy (so it doesn't change anything in the original variable)

$person = ['fname'=>'lionel', 'lname'=>'messi'];

function printName($person){
    $person['lname'] = 'Scaloni';
    print_r($person);   // functions copy variable is changed
}

// printName($person);
// print_r($person);   // external variable is unchanged


// Pass by reference - The function uses the original variable. If you change the variable in the other function, it changes in the original variable too.

$fruits = ['a'=>'apple', 'b'=>'banana'];

function printFruit(&$fruits){
    $fruits['b'] = 'orange';    // modifying the referenced variable so original variable will also change
    print_r($fruits);
}

printFruit($fruits);
print_r($fruits);