<?php
/**
 *  0 1 1 2 3 5 8 13 21 34 55 89 
 */

$first = 0;
$last = 1;

for($i=0; $i<15; $i++){
    echo $first." ";
    $temp = $last;
    $last = $first + $last; 
    $first = $temp;
}



