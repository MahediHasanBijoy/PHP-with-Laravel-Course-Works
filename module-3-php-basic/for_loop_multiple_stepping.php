<?php
/**
 *  for loop multiple stepping
 */

 for($i=0, $j=0; $i<10; $i++,$j++){
    echo $i. " " . $j.PHP_EOL;
 }

 for($i=1, $j=10; $i<=10; $i++, $j--){
    echo $i." ".$j."\n";
 }

 for($i=1, $j=1; $i<10&&$j<100; $i++, $j+=$j){
    echo "$i -- $j\n";
 }

 for($i=1, $j=1; $i<10||$j<100; $i++, $j+=$j){
    echo "$i -- $j\n";
 }
echo "\n";
echo "\n";
echo "\n";
 // print numbers divisible by 7 and 11 between 0 to 100
 for($i=0, $j=0; $i<100; $i+=7, $j+=11){
    echo $i."\n";
    echo $j<100 ? $j."\n" : "";
 }

 