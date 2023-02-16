<?php
// 4.Problem :Remove all duplicate values from multiple arrays, and merge the unique values into a new array:

$fruits1 = array("apple", "banana", "orange");
$fruits2 = array("orange", "grape", "kiwi");
$fruits3 = array("apple", "pear", "kiwi");

$fruits = array_merge($fruits1, $fruits2, $fruits3);

$unique_fruits = array_unique($fruits);

print_r($unique_fruits);