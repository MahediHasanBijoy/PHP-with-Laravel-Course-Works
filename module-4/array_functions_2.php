<?php
/**
 *  21.array_filter is a built-in PHP function that allows you to filter the elements of an array based on a callback function. The function takes two arguments:
 * The array to be filtered.
 * A callback function that returns true or false depending on whether each element should be included in the filtered result.
 */

//  function isEven($n){
//     return $n%2==0;
//  }

//  $numbers = [1,2,3,4,5,6,7,8,9];
//  $even_numbers = array_filter($numbers, "isEven");

//  print_r($even_numbers);


//  array_keys(): This function returns an array of all the keys in an associative array. The resulting array will have integer or string indices, depending on the type of keys in the original array.

// $colors = ["sky"=>"blue", "tree"=>"green", "mango"=>"yellow", "blood"=>"red"];
// $keys = array_keys($colors);
// print_r($keys);


// array_values(): This function returns an array of all the values in an associative array. The values will be stored in a numerically indexed array.

// $colors = ["sky"=>"blue", "tree"=>"green", "mango"=>"yellow", "blood"=>"red"];
// $values = array_values($colors);
// print_r($values);


// array_count_values(): This function returns an associative array, where the keys are the values in the original array, and the values are the number of times that value appears in the original array.
// $fruits = array("apple", "banana", "grape", "apple", "banana");
// $values = array_count_values($fruits);
// print_r($values);


// array_reduce(): This function iteratively reduces an array to a single value using a callback function. It takes two arguments: the first is the array to be reduced, and the second is a callback function that takes two arguments: the accumulator and the current value. The accumulator is initialized with the first value in the array, and the callback function is applied to each subsequent value in the array, with the accumulator being updated with each iteration.

// $numbers = array(1,2,3,4,5);
// $sum = array_reduce($numbers, function($a, $b){
//     return $a+$b;
// });

// echo $sum;


// array_splice(): This function removes elements from an array and can also add new elements. It takes the following arguments: the input array, the starting offset, the number of elements to be removed, and optionally, the elements to be added.

// $fruits = array("apple", "banana", "grape", "kiwi", "mango");
// array_splice($fruits, 2, 2, array("orange", "lemon"));
// print_r($fruits);


// array_unique(): This function removes duplicate values from an array. The resulting array will contain only unique values, and the keys will be reindexed.
// $fruits = array("apple", "banana", "grape", "apple", "banana");
// $unique = array_unique($fruits);
// print_r($unique);


// asort(): This function sorts an associative array in ascending order, based on the values. The keys are preserved, but the order of the elements is changed.
// $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
// asort($fruits);
// print_r($fruits);


// ksort(): This function sorts an associative array in ascending order, based on the keys. The values are preserved, but the order of the elements is changed.
// $fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
// ksort($fruits);
// print_r($fruits);


// array_reverse(): This function reverses the order of elements in an array. The keys are preserved, but the order of the elements is changed.
$fruits = ["apple", "banana", "grape"];
$reversed = array_reverse($fruits);
print_r($reversed);