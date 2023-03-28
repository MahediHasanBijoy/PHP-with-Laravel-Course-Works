<?php
// 8.Problem: Find the intersection of multiple arrays of strings, i.e. the values that appear in all arrays:

$fruits1 = array("apple", "banana", "orange");
$fruits2 = array("orange","apple", "grape", "kiwi");
$fruits3 = array("apple", "pear", "kiwi");

print_r(array_intersect($fruits1, $fruits2, $fruits3));