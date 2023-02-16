<?php
/**
 *  Important array functions
 */

$numbers = [31,11,51,21,61,41];

// count()
// echo count($numbers);

// max()
// echo max($numbers);


// min()
// echo min($numbers);


// // sort()
// sort($numbers);
// print_r($numbers);

// rsort() : sort array elements reversely/ descending
// rsort($numbers);
// print_r($numbers);

// in_array()
// if(in_array(31, $numbers)){
//     echo "value found";
// }else{
//     echo "not found";
// }

// array_key_exists: This function checks if a specified key exists in an array.
// $students = ["fName"=>"mahedi", "lName"=>"hasan", "age"=>28, "roll"=>51];
// if(array_key_exists("fName", $students)){
//     echo "student have valid firstname";
// }else{
//     echo "no firstname field found";
// }


// array_push: This function adds one or more elements to the end of an array.
// $fruits = array("apple", "banana", "orange", "grape", "dates");
// array_push($fruits, "mango", "pineapple", "watermelon");
// print_r($fruits);


//  array_pop: This function removes the last element from an array and returns the value of the removed element.
// $fruits = array("apple", "banana", "orange", "grape", "dates");
// array_pop($fruits);
// print_r($fruits);
// array_pop($fruits);
// print_r($fruits);


// array_shift: This function removes the first element from an array and returns the value of the removed element.
// $fruits = ["apple", "banana", "orange"];
// array_shift($fruits);
// print_r($fruits);

// $names = ["firstName"=>"mahedi", "middleName"=>"hasan", "last_name"=>"bijoy"];
// array_shift($names);
// print_r($names);


// array_unshift: This function adds one or more elements to the beginning of an array.
// $fruits =  ["apple", "banana", "orange"];
// array_unshift($fruits, "dates", "melon");
// print_r($fruits);

// array_combine: This function creates an array by using the elements from one array as keys and the elements from another array as values.
// $keys = ['firstname' , 'lastname', 'age'];
// $values = ['mahedi', 'hasan', 30];
// $names = array_combine($keys, $values);
// print_r($names);


//  array_merge: This function merges two or more arrays into one array.
// $array1 = ["apple", "pineapple", "banana"];
// $array2 = ["orange", "lemon", "melon"];
// $array3 = ["grapes", "dates", "almond", "pear"];
// $fruits = array_merge($array1, $array2, $array3);
// print_r($fruits);


// array_unique: This function removes duplicates from an array and returns an array with only unique values.
// $numbers = [1,2,3,2,5,3,2,1,2,5,11];
// print_r(array_unique($numbers));


// array_intersect: This function returns an array containing all the values of arrays that have matching values.
// $num1 = [1,3,2,5,3,4,9];
// $num2 = [3,5,8,9,4,6];
// $result = array_intersect($num1, $num2);
// print_r($result);


// array_diff: This function returns an array containing all the values from the first array that are not present in any of the other arrays.
// $array1 = ["a"=>"green", "red", "blue"];
// $array2 = ["b"=>"green", "yellow", "red"];
// $result = array_diff($array1, $array2);
// print_r($result);


// array_slice: This function returns a portion of an array.
// $array = [1,2,3,4,5,6,7,8,9];
// $part = array_slice($array, 2, 3, true);
// print_r($part);


// array_reverse: This function reverses the order of elements in an array.
// $numbers = [1,2,3,4,5];
// $newNumbers = array_reverse($numbers);
// print_r($newNumbers);


//  sort: This function sorts an array in ascending order.
// $fruits = array("cherry", "banana", "apple");
// sort($fruits);
// print_r($fruits);


//  rsort: This function sorts an array in descending order.
// $fruits = array("cherry", "banana", "apple");
// rsort($fruits);
// print_r($fruits);


// usort: This function sorts an array using a user-defined comparison function.
//  $fruits = array("cherry", "banana", "apple");

// function custom_sort($a, $b) {
//     return strlen($a) - strlen($b);
// }

// usort($fruits, "custom_sort");

// print_r($fruits);



// array_search: This function searches an array for a specified value and returns the key if found.
// $numbers = [1,3,2,4,6,5,22,31,20,11];
// $key = array_search(6,$numbers);
// echo $key;


// in_array: This function checks if a specified value exists in an array.
// $fruits = ['apple', 'banana', 'orange'];
// if(in_array('orange', $fruits)){
//     echo "found orange";
// }else{
//     echo "not found";
// }


// array_map() returns an array containing the results of applying the callback to the corresponding value of array (and arrays if more arrays are provided) used as arguments for the callback. 
function square($num){
    return $num*$num;
}

$numbers = [1,2,3,4];
$result = array_map("square", $numbers);
print_r($result);