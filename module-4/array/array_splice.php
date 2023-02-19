<?php
/*
    array_splice — Remove a portion of the array and replace it with something else
    array_splice(
        array &$array,
        int $offset,
        ?int $length = null,
        mixed $replacement = []
    ): array
*/

// cut some elements from original array to another array
// $fruits = ['apple', 'orange', 'banana', 'grape', 'dates', 'pulm', 'peach'];

// $someFruits = array_splice($fruits, 2, 3);
// print_r($someFruits);
// print_r($fruits);


// cut some elements from original array and replace with another array
$fruits = ['apple', 'orange', 'banana', 'grape', 'dates', 'pulm', 'peach'];

$someFruits = array_splice($fruits, 2, 2, ['mango', 'tamarind', 'jackfruit']);
print_r($someFruits);
print_r($fruits);