<?php

/**
 *  some amazing tricks of printf 
 * 
 */

$firstName = "Mahedi";
$midName = "Hasan";
$lastName = "Bijoy";

// swapping order of variable
printf('my name is %1$s %3$s %2$s', $firstName, $lastName, $midName);
echo "\n";


printf('binary equivalent of %d is %b', 12, 12);   // without variable order
printf('binary equivalent of %1$d is %1$b', 12);   // with variable order
echo "\n";

// print 2 digit after decimal point
$n = 12.12523;
printf("%.2f\n", $n);

// print 4 digit decimal and 2 digit after decimal point
$n = 12.12345;
printf("%07.2f\n", $n);  // count total digits of output and put before point and add zero before it

$a = 123;  // output as 0123
$b = 23;   // output as 0023
printf("%04d\n", $a);
printf("%04d\n", $b);
