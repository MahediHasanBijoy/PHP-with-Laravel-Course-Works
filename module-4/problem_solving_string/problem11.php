<?php
// Write a function that takes a string as input and returns the string with the first letter of each word capitalized.

function capitalized($string){
    return ucwords($string);
}

echo capitalized("bangladesh is my motherland");