<?php

/**
 *  Nested if else vs readable non nested if else
 */


$condition1 = true;
$condition2 = true;
$condition3 = false;

// easier to write but not readable
if ($condition1) {
   if ($condition2) {
      if ($condition3) {
         echo "Hello";
      } else {
         echo "no 1";
      }
   } else {
      echo "no 2";
   }
} else {
   echo "no 3";
}

echo "\n";

// more readable code
if ($condition1 && $condition2 && $condition3) {
   echo "Hello";
} elseif ($condition1 && $condition2) {
   echo "no 1";
} elseif ($condition1) {
   echo "no 2";
} else {
   echo "no 3";
}

