<?php
// range() — Create an array containing a range of elements
// range(string|int|float $start, string|int|float $end, int|float $step = 1): array
// If a step value is given, it will be used as the increment (or decrement) between elements in the sequence

$numbers = range(12,20);
print_r($numbers);


// even numbers
$evenNumbers = range(12, 20, 2);
print_r($evenNumbers);

// numbers divisible by 7
$divisibleBySeven = range(0, 50, 7);
print_r($divisibleBySeven);


// numbers between 0 to 60 divisible  by 11
foreach(range(0, 60, 11) as $number){
    if($number > 0){
        echo $number." ";
    }
}