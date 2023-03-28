<?php
//5.Problem : Group an array of numbers into "odd" and "even" groups:
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$groups = array_reduce($numbers, function($acc, $num){
    if($num%2 ==0){
        $acc['even'][] = $num;
    }else{
        $acc['odd'][] = $num;
    }

    return $acc;
});

print_r($groups);