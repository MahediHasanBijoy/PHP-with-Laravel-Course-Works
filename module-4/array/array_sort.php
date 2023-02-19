<?php
// sort() sorts an array without preserving the keys
// $fruits = ['banana', 'apple', 'orange', 'dates', 'pulm', 'mango'];
// sort($fruits);
// print_r($fruits);

// $numbers = [22, 1, 4, 2, 6, 9, 3, 2, 11];
// sort($numbers);
// print_r($numbers);

// rsort(): reverse sort/ descending order sort
// $numbers = [22, 1, 4, 2, 6, 9, 3, 2, 11];
// rsort($numbers);
// print_r($numbers);

// if there is any key then sort() will remove the keys
// $fruits = ['banana', 'b'=>'apple', 'orange', 'a'=>'dates', 'pulm', 'mango'];
// sort($fruits);
// print_r($fruits);


// asort() sorts an array with keys perserved
// $fruits = ['banana', 'b'=>'apple', 'orange', 'a'=>'dates', 'pulm', 'mango'];
// asort($fruits);
// print_r($fruits);

// $numbers = [22, 1, 4, 2, 6, 9, 3, 2, 11];
// asort($numbers);
// print_r($numbers);


// arsort(): reverse associative sort or descending sort
// $numbers = [22, 1, 4, 2, 6, 9, 3, 2, 11];
// arsort($numbers);
// print_r($numbers);


// ksort(): sort array based on keys
$colors = ['b'=>'red', 'd'=>'blue', 'a'=>'green', 'c'=>'yellow'];
ksort($colors);
print_r($colors);
// krsort(): reverse order or descending order sort
krsort($colors);
print_r($colors);