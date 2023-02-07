<?php
/**
 *  type hinting in php function ensures that the arg passed is specific type
 */

function factorial(int $n):int {
    $result = 1;
    for($i=1; $i<=$n; $i++){
        $result *= $i;
    }
    return $result;
}

$n = 3;
echo "Factorial of $n is ".factorial($n);