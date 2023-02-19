<?php
// Write a function that takes two strings as input and returns a new string that is the result of alternating the characters of the two input strings.
// input: 'bangladesh', 'sylhet'
// output: 'bsaynlghleatdesh'

function alternateString($string1, $string2){
    $len1 = strlen($string1);
    $len2 = strlen($string2);
    $maxlen = max($len1, $len2);
    $result = "";

    for($i=0; $i<$maxlen; $i++){
        if($i < $len1){
            $result .= $string1[$i];
        }
        if($i < $len2){
            $result .= $string2[$i];
        }
    }
    return $result;
}

echo alternateString("bangladesh", "sylhet");