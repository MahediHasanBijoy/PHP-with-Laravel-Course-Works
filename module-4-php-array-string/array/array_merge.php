<?php

// array_merge() merges two or more arrays into single array
$fruits = ['apple', 'orange', 'banana', 'grape', 'dates', 'pulm', 'peach'];

// $fruits1 = array_slice($fruits, 0, 3);
// $fruits2 = array_slice($fruits, 3);

// $newFruits = array_merge($fruits1, $fruits2);
// print_r($newFruits);

// another way of merging arrays is use + symbol / when using + for merging the array should have unique keys
// $fruits1 = array_slice($fruits, 0, 3);
// $fruits2 = array_slice($fruits, 3);

// $plusFruits = $fruits1 + $fruits2;  // this won't work properly as fruits1 and fruits2 have index starting from 0

// print_r($plusFruits);

// correct way of doing this
// $fruits1 = array_slice($fruits, 0, 3, true);
// $fruits2 = array_slice($fruits, 3, null, true);

// $correctWay = $fruits1 + $fruits2;

// print_r($correctWay);



// replace some elements of array with another array values
$random = ['a'=>12, 'b'=>14, 'c'=>23, 'd'=>43, 'e'=>44, 'f'=>81, 13=>13, 'g'=>92];

// $randomData = array_splice($random, 2, 2, ['j'=>11, 'k'=>88]);  //this method loses array keys
// print_r($randomData);
// print_r($random);

// to preserve keys and replace array elements use array merge this way
$random = ['a'=>12, 'b'=>14, 'c'=>23, 'd'=>43, 'e'=>44, 'f'=>81, 13=>13, 'g'=>92];
$r1 = array_slice($random, 0, 2, true);
$r2 = array_slice($random, 2, null, true);
$r3 = array('j'=>11, 'k'=>22);

$newRandom = $r1 + $r3 + $r2;
print_r($newRandom);