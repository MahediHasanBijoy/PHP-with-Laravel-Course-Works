<?php
// Write a function that takes a string as input and returns a new string with all vowels removed.

function removeVowel($str){
    $str = strtolower($str);
    return preg_replace("/[aeiou]/i", "", $str);
}

echo removeVowel("Bangladesh is my motherland");