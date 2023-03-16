<?php
echo  "hello world\n";
echo "hello world 2\n";

$name = "Bijoy";
var_dump($name);

$var = null;
var_dump($var);

print($name);

$name = "Earth";
echo "we're living in {$name}";


$fname = "mahedi";
$lname = "hasan";
// The major differences to echo are that print only accepts a single argument and always returns 1.
$status = print $fname . " " . $lname;
print "\n";
echo $fname, " ", $lname;

echo $status;

echo PHP_EOL;

// printf()
$planet1 = "earth";
$planet2 = "jupiter";
printf("The smallest planet is %s, the biggest planet is %s\n", ucfirst($planet1), strtoupper($planet2));
