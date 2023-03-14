<?php

// processing file using json data
$filename = "C:/Users/bijoy/Desktop/Ostad-php-laravel/module-6/filesystem/data/f3.txt";

$students = array(
    array(
        'fname' => 'Rubel',
        'lname' => 'Hossain',
        'age'   => 20,
        'class' => 10
    ),
    array(
        'fname' => 'Nazmul',
        'lname' => 'Hasan',
        'age'   => 21,
        'class' => 12
    ),
    array(
        'fname' => 'Afjol',
        'lname' => 'Hossain',
        'age'   => 24,
        'class' => 11
    )
);

// // write data to a file as json format
// $json_data = json_encode($students);
// file_put_contents($filename, $json_data);


// read json data from a file and convert it to an array
$raw_data = file_get_contents($filename);
$data = json_decode($raw_data, true);
print_r($data);