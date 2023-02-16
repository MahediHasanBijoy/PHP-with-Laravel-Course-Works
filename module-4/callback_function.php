<?php

/**
 * A callback function (often referred to as just "callback") is a function which is passed as an argument into another function.
 * 
 * Any existing function can be used as a callback function. To use a function as a callback function, pass a string containing the name of the function as the argument of another function:
 * 
 */

/* 
function my_callback($item)
{
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);
print_r($lengths); */


// use an anonymous function as callback for this array_map function
/* $strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map(function ($item) {
    return strlen($item);
}, $strings);
print_r($lengths);
 */


// To use callback functions inside a user-defined function or method, call it by adding parentheses to the variable and pass arguments as with normal functions:

function addExclamation($str){
    return $str."!";
}

function addQuestion($str){
    return $str."?";
}

function printFormatted($string, $callback){
    // $callback will be replaced by the given function name as parameter to this function
    echo $callback($string);
}

// passing functions as callback to printFormatted function
printFormatted("Hi", "addExclamation");

echo "\n";

printFormatted("What", "addQuestion");