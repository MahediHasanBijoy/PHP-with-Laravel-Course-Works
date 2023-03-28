<?php
$filename = "C:/Users/bijoy/Desktop/Ostad-php-laravel/module-6/filesystem/data/students.txt";

// r+ mode open file for read and write operation and keeps previous data
// $fp = fopen($filename, "r+");

// fwrite($fp, "Mahedi\n");
// fwrite($fp, "Bijoy\n");
// fwrite($fp, "Sujon\n");

// $line = fgets($fp);
// echo $line;

// fclose($fp);


// w+ mode open file for reading and writing but removes all previous data

// $fp = fopen($filename, "w+");

// fwrite($fp, "Mahedi\n");
// fwrite($fp, "Hasan\n");

// // move pointer to the starting position of the file
// rewind($fp);

// move file pointer to a specific position 
// fseek($fp, 7);
// $line = fgets($fp);
// echo $line;

// fwrite($fp, "bijoy");

// $line = fgets($fp);
// echo $line;

// fclose($fp);


// 'a+' mode: Open for reading and writing; place the file pointer at the end of the file. If the file does not exist, attempt to create it. In this mode, fseek() only affects the reading position, writes are always appended.

$fp = fopen($filename, 'a+');

fwrite($fp, "Nazmul");
fwrite($fp, "Pranto");

fclose($fp);


