<?php
// Commonly used string functions in PHP 

/*
Here is a list of 20 commonly used string functions in PHP:
strlen
substr
strpos
str_replace
trim
strtoupper
strtolower
ucfirst
ucwords
strrev
str_pad
str_repeat
str_split
explode
implode
addslashes
stripslashes
htmlentities
html_entity_decode
strip_tags
======================
These functions can be used to perform various operations on strings such as finding the length of a string, extracting substrings, finding and replacing substrings, trimming whitespaces, converting cases, reversing strings, padding strings, splitting strings, converting arrays to strings and vice versa, encoding and decoding HTML entities, and removing HTML tags.
=============================
*/


// strlen: Returns the length of a string.

// $string = "Hello, World!";
// $length = strlen($string);

// echo "The length of the string is: $length";


// strpos: Returns the position of the first occurrence of a substring in a string.

// $string = "Hello, World!";
// $position = strpos($string, "World");

// echo "The position of the first occurrence of 'World' is: $position";


// str_replace: Replaces all occurrences of a search string with a replacement string.

// $string = "Hello, World!";

// $new = str_replace("World!", "Earth", $string);
// echo $new;


// substr: Returns a portion of a string.
// $string = "Hello, World";
// $part = substr($string, 2, 7);
// echo $part;


// trim: Removes whitespaces or specified characters from the beginning and end of a string
// $string = " Hello, World! \n";
// $trimmed = trim($string);
// echo $trimmed;

// $string = "\nhello, world!";
// $new = trim($string, "!\n");
// echo $new;


// strtolower: Converts a string to lowercase.
// $str = "Hello, PHP Programmer";
// echo strtolower($str);


// strtoupper: Converts a string to uppercase.
// $str = "Hello, PHP Programmer";
// echo strtoupper($str);


// explode: Splits a string into an array based on a specified delimiter.
// $fruits = "cherry, banana, apple, orange";
// $fruits_array = explode(", ", $fruits);
// print_r($fruits_array);


// implode: Joins elements of an array into a string using a specified glue.
// $fruits = array("apple", "banana", "grapes");
// echo implode(",", $fruits);


// str_split: Converts a string into an array of individual characters.
// $string = "hello, world";
// $characters = str_split($string, 2);
// print_r($characters);


// md5: Calculates the MD5 hash of a string.
// $string = "Hello php";
// $hashed = md5($string);
// echo $hashed;


// sha1: Calculates the SHA1 hash of a string.
// $string = "password";
// $hashed = sha1($string);
// echo $hashed;


// ucfirst: This function capitalizes the first character of a string.
// $string = "hello world";
// echo ucfirst($string);


// ucwords: This function capitalizes the first character of each word in a string.
// $string = "hello world";
// echo ucwords($string);


// strrev: This function reverses a string.
// $string = "hello";
// echo strrev($string);


// str_pad: This function pads a string to a certain length with another string.
// $string = "hello";
// $pad = str_pad($string, 20, "=-", STR_PAD_BOTH);
// echo $pad;


// str_repeat: This function repeats a string a specified number of times.
$string = "hello";
echo str_repeat($string, 10);