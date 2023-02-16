<?php
// Write a function that takes a string as input and returns the number of vowels in the string. Use the strlen(), strtolower(), and substr() functions to process the string.

function numberOfVowels($string){
    $string = strtolower($string);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    // $characters = str_split($string);
    // foreach($characters as $ch){
    //     if(in_array($ch, $vowels)){
    //         $count++;
    //     }
    // }
    $strlen = strlen($string);
    for($i=0; $i<$strlen; $i++){
        if(in_array(substr($string,$i,1),$vowels)){
            $count++;
        }
    }
    return $count;
}

$string = "Bangladesh is my mother land";
echo numberOfVowels($string);