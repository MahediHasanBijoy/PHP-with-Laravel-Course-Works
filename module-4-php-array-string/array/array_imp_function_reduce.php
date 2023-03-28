<?php
// array_reduce() applies iteratively the callback function to the elements of the array, so as to reduce the array to a single value.

$nums = [2,1,3,4,5,7,5,6,9];

function sum($carry, $item){
    return $carry + $item;
}

$result = array_reduce($nums, "sum");
echo $result.PHP_EOL;

