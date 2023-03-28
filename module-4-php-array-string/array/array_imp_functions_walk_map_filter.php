<?php
// array_walk() Applies the user-defined callback function to each element of the array array. array_walk return boolean, user defined function doesn't return anything.

$numbers = [1,2,3,4,5,6,7,8,9];

function square($n){
    printf("the square of %d is %d\n", $n, $n*$n);
    return "hello";
}

array_walk($numbers, "square");


// array_map() returns an array containing the results of applying the callback to the corresponding value of array (and arrays if more arrays are provided) used as arguments for the callback
$numbers = [1,2,3,4,5,6,7,8,9];

function cube($n){
    return  $n*$n*$n;
}

$cubes = array_map("cube", $numbers);

print_r($cubes);


// array_filter():array Iterates over each value in the array passing them to the callback function. If the callback function returns true, the current value from array is returned into the result array.
$numbers = [1,2,3,4,5,6,7,8,9];

function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}

$even_numbers = array_filter($numbers, "isEven");

print_r($even_numbers);


