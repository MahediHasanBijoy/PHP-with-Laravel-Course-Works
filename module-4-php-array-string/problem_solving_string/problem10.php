<?php
// Write a function that takes a string as input and returns the string with all spaces removed.

function removeSpace($string){
    return str_replace(" ", "", $string);
}

echo removeSpace("Bangladesh is my motherland");