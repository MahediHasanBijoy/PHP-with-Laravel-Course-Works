<?php

// processing file using serialized arrays
$filename = "C:/Users/bijoy/Desktop/Ostad-php-laravel/module-6/filesystem/data/f2.txt";

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

$data = serialize($students);

// write data to a file
// file_put_contents($filename, $data);

// read data from file
$studentInfo = file_get_contents($filename);

$array_data = unserialize($studentInfo);

print_r($array_data);

// delete data from file
unset($array_data[1]);
$changed_data = serialize($array_data);
file_put_contents($filename, $changed_data);

// output changed data from file
print_r(unserialize(file_get_contents($filename)));





