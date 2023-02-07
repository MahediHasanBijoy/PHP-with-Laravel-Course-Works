<?php
/**
 *  0 1 1 2 3 5 8 13 21 34 55 89
 */

function fibonacci($n){
    if($n==0){
        return;
    }
    static $first = 0;
    static $last = 1;

    echo $first." ";

    $temp = $first;
    $first = $last;
    $last = $temp + $last;
    fibonacci(--$n);
}

fibonacci(10);

echo "\n\n\n";
// better way of doing this
function fibo($start,$end,$length){
    if($length == 0){
        return;
    }

    echo $start." ";

    $_temp = $start;
    $start = $end;
    $end   = $_temp + $end;
    
    $length--;
    fibo($start, $end, $length);
}

fibo(0,1, 12);