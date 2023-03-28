<?php
// array_intersect() returns an array containing all the values of array that are present in all the arguments. Note that keys are preserved.
// $numbers1 = [1,3,25,4,9,5,8,11];
// $numbers2 = [4,22,3,12,29,39,19];

// $common_numbers = array_intersect($numbers1, $numbers2);

// print_r($common_numbers);


// $fruits1 = ['a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'malta'];
// $fruits2 = ['b'=>'mango', 'd'=>'melon', 'e'=>'grapes', 'f'=>'malta'];

// $common_fruits = array_intersect($fruits1, $fruits2);

// print_r($common_fruits);


// array_intersect_assoc — Computes the intersection of arrays with additional index check
// $fruits1 = ['a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'malta'];
// $fruits2 = ['b'=>'mango', 'd'=>'melon', 'e'=>'grapes', 'f'=>'malta'];

// $common_fruits = array_intersect_assoc($fruits1, $fruits2);

// print_r($common_fruits);


// array_intersect_key() returns an array containing all the entries of array which have keys that are present in all the arguments.
$fruits1 = ['a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'malta'];
$fruits2 = ['b'=>'mango', 'd'=>'melon', 'e'=>'grapes', 'f'=>'malta'];

$common_fruits = array_intersect_key($fruits1, $fruits2);

print_r($common_fruits);


// array_diff() Compares array against one or more other arrays and returns the values in array that are not present in any of the other arrays.
$numbers1 = [1,3,25,4,9,5,8,11];
$numbers2 = [4,22,3,12,29,39,19];

$diff_numbers = array_diff($numbers1, $numbers2);

print_r($diff_numbers);

$fruits1 = ['a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'malta'];
$fruits2 = ['b'=>'mango', 'd'=>'melon', 'e'=>'grapes', 'f'=>'malta'];

$diff_fruits = array_diff($fruits1, $fruits2);

print_r($diff_fruits);

// Compares array against arrays and returns the difference. Unlike array_diff() the array keys are also used in the comparison.
$fruits1 = ['a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'malta'];
$fruits2 = ['b'=>'mango', 'd'=>'melon', 'e'=>'grapes', 'd'=>'malta'];

$diff_fruits = array_diff_assoc($fruits1, $fruits2);

print_r($diff_fruits);