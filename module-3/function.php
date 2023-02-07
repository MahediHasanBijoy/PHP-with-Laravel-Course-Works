<?php
// find if a number is even
function isEven($arg){
    if($arg%2 == 0){
        return true;
    }
    return false;
}

$num = 11;
if(isEven( $num )){
    echo "$num is an even number\n";
}else{
    echo "$num is an odd number\n";
}