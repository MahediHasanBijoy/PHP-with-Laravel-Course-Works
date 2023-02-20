<?php
$string = "Hello World";

// string characters can be accessed like array
echo $string[0]. "\n";
echo $string[3]. "\n";

// substr() Returns the portion of string specified by the offset and length parameters.

$part = substr($string, 3, 3);
echo $part. "\n";

$part2 = substr($string, 3);
echo $part2. "\n";

$part3 = substr($string, 3, -2);
echo $part3. "\n";

$part4 = substr($string, -5, 3);
echo $part4. "\n";

$part5 = substr($string, -5, -3);
echo $part5. "\n";