<?php
// different ways of processing data in a file

$file = "C:/Users/bijoy/Desktop/Ostad-php-laravel/module-6/filesystem/data/05_data.txt";

$students = array(
    array(
        "fname" => "mahedi",
        "lname" => "hasan",
        "age"   => 30,
        "class" => 10,
        "roll"  => 51
    ),
    array(
        "fname" => "nazmul",
        "lname" => "hossain",
        "age"   => 35,
        "class" => 10,
        "roll"  => 101
    ),
    array(
        "fname" => "hasin",
        "lname" => "hayder",
        "age"   => 33,
        "class" => 11,
        "roll"  => 2
    ),
);

// save stduents data as comma separated value in file
$fp = fopen($file, "w");
foreach($students as $student){
    $data = sprintf("%s, %s, %d, %d, %d\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);

    fwrite($fp, $data);
}

fclose($fp);