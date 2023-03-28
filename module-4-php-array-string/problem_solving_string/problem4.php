<?php
// Write a function that takes a string as input and returns the number of times the word "PHP" appears in the string.

function countPHP($string){
    // count a substring in a string
    $count = substr_count($string, "PHP");
    return $count;
}

echo countPHP("We love PHP. We are learning PHP");