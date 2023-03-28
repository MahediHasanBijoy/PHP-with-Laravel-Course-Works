<?php
// Write a function that takes two strings as input and returns a new string that consists of the first half of the first string concatenated with the second half of the second string.

function stringConcat($string1, $string2){
    $length1 = strlen($string1);
    $length2 = strlen($string2);

    // half lenght of given strings
    $half1 = floor($length1/2);
    $half2 = floor($length2/2);

    return substr($string1, 0, $half1) . substr($string2, $half2);
}

echo stringConcat("bangladesh","sylhet");

