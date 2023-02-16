<?php
// Write a function that takes a string as input and returns the string with all vowels replaced by the character "x". Use the str_replace() and strtolower() functions to process the string.

function vowelReplace(string $string){
    $string = strtolower($string);
    $vowels = ['a','e','i','o','u'];

    foreach($vowels as $vowel){
        $string = str_replace($vowel, "x", $string);
    }
    return $string;
}

echo vowelReplace("Bangladesh is a great country");