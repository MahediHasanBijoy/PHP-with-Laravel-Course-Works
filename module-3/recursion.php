<?php

/**
 *  recursive function
 */

// print 0 to 9 using recursion
function printN($n)
{
    if ($n >= 10) {
        return;
    }
    echo "$n\n";
    $n++;
    printN($n);
}

printN(0);


// print n to m number
function printBetween($n, $m){
    if($n > $m){
        return;
    }

    echo "$n \n";
    $n++;
    printBetween($n, $m);
}

printBetween(100, 120);



