<?php
/*
  array_slice — Extract a slice of the array
  array_slice(
    array $array,
    int $offset,
    ?int $length = null,
    bool $preserve_keys = false
  ): array
 */

// without length parameter array_slice will slice offset to end of the array
// $fruits = ['apple', 'banana', 'dates', 'mango', 'grapes', 'orange'];
// $someFruits = array_slice($fruits, 2);
// print_r($someFruits);


// with positive length parameter array_slice will slice number of elements as given length from offset
// $fruits = ['apple', 'banana', 'dates', 'mango', 'grapes', 'orange', 'watermelon', 'olive'];
// $someFruits = array_slice($fruits, 2, 3);
// print_r($someFruits);


// with negative length parameter array_slice will slice number of elements from offset to negative length position from end
// $fruits = ['apple', 'banana', 'dates', 'mango', 'grapes', 'orange','watermelon', 'olive'];
// $someFruits = array_slice($fruits, 2, -1);
// print_r($someFruits);


// to preserve key
// $fruits = ['apple', 'banana', 'dates', 'mango', 'grapes', 'orange','watermelon', 'olive'];
// $someFruits = array_slice($fruits, 2, -1, true);
// print_r($someFruits);


/**
 *  Associative array slicing
 */

// in associative array normal slicing without preserve key parameter preserves keys if all the keys are string type
// $numbers = ['a'=>12, 'b'=>22, 'c'=>15, 'd'=>33, 'e'=>39, 'f'=>92, 'g'=>82];
// $sliced_numbers = array_slice($numbers, 2);
// print_r($sliced_numbers);


// for numeric keys preserve keys parameter needed to preserve the keys
// $numbers = [1=>12, 2=>22, 3=>15, 4=>33, 5=>39, 6=>92, 7=>82];
// $sliced_numbers = array_slice($numbers, 2, null, true);
// print_r($sliced_numbers);



// for mixed parameter type if preserve keys are not set then numeric keys will not preserve but string keys will preserve
// $numbers = ['a'=>12, 'b'=>22, 'c'=>15, 'd'=>33, 'e'=>39, 12=>77,'f'=>92, 'g'=>82];
// $sliced_numbers = array_slice($numbers, 2, null, true);
// print_r($sliced_numbers);


// slicing from negative offset to negative length as end offset
$numbers = ['a'=>12, 'b'=>22, 'c'=>15, 'd'=>33, 'e'=>39, 'f'=>92, 'g'=>82];
$sliced_numbers = array_slice($numbers, -5, -2);
print_r($sliced_numbers);