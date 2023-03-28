<?php
// get a random number from an array

// array of numbers between 1 to 10
$numbers = range(1,10);

// this random number will use as key of numbers array to select a random element
$random = mt_rand(0,9); 

echo "Random number: " . $numbers[$random].PHP_EOL;


// write a program to output coin toss result as head or tail
function headOrTail($num){
    if($num%2==0){
        echo "Head".PHP_EOL;
    }else{
        echo "Tail".PHP_EOL;
    }
}

$random = mt_rand(1,50);

headOrTail($random);


// shuffle() This function shuffles (randomizes the order of the elements in) an array.
$numbers = [1,2,3,4,5,6,7,8,9,2,22,33,11,29];

shuffle($numbers);

// print_r($numbers);
echo $numbers[0].PHP_EOL;


/**
 *  shuffle() in associative array drops the keys 
 *  To suffle an associative array use array_rand() function to generate random key from an array
 */

$fruits = ['a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'dates'];

// shuffle($fruits);   // drops original array keys
// print_r($fruits);   

$key = array_rand($fruits); // random key
echo $fruits[$key].PHP_EOL;     // random fruit 