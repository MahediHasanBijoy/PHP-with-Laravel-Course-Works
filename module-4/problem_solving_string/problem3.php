<?php
// Write a function that takes a string as input and returns the string with all words in reverse order. Use the explode(), array_reverse(), and implode() functions to process the string.

function reverse($string){
    $words = explode(' ', $string);
    $reversedWords = array_reverse($words);
    
    return implode(" ", $reversedWords);
}

echo reverse("hello world");