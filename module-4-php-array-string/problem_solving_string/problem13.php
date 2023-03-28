<?php
// Write a function that takes a string as input and returns the string with all characters replaced by the ASCII value of the character.

function replaceWithASCII($string){
    $result = "";
    $length = strlen($string);
    for($i=0; $i<$length; $i++){
        $result .= ord($string[$i])." ";
    }
    return $result;
}

echo replaceWithASCII("ফয়সল আহমদ");