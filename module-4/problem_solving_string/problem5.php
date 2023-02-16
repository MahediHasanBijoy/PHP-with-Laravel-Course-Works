<?php
// Write a function that takes a string as input and returns a new string that consists of the first and last two letters of the input string.

function formatString($string){
    return substr($string, 0, 2) . substr($string, -2);
}

echo formatString("bangladesh is my motherland");