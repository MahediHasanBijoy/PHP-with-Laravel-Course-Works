<?php
// Write a function that takes a string as input and returns the string with all occurrences of the substring "not" removed.

function removeNot($string){
    $string = strtolower($string);
    $string = str_replace("not ", "", $string);
    return $string;
}

echo removeNot("we are not cricket players. we are not actors.");