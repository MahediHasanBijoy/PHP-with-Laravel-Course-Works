<?php

// 'w' mode: Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. If the file does not exist, attempt to create it.

$filename = "C:/Users/bijoy/Desktop/Ostad-php-laravel/module-6/filesystem/data/fruits.txt";


// write mode removes previous data and add new data to file
// $fp = fopen($filename, 'w');

// Open for writing only; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() has no effect, writes are always appended.
$fp = fopen($filename, 'a');

// fwrite($fp, "Apple\n");
// fwrite($fp, "Orange\n");

fwrite($fp, "Mango\n");

fclose($fp);