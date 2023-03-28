<?php

// factorial of a number
function factorial($n){
    if($n==1){
        return $n;
    }

    return $n * factorial($n-1);
}
echo "\n";
echo "Factorial of 6 is ".factorial(6);
