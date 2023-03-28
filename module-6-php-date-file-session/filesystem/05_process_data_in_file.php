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

/* // save stduents data as comma separated value in file
$fp = fopen($file, "w");
foreach($students as $student){
    $data = sprintf("%s, %s, %d, %d, %d\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);

    fwrite($fp, $data);
}

fclose($fp);

// read data from file
$fp = fopen($file, 'r');

while($line = fgets($fp)){
    $data = explode(",",$line);

    printf("Name: %s %s\nAge: %s\nClass: %s\nRoll: %s\n\n", $data[0], $data[1], $data[2], $data[3], $data[4]);
}
fclose($fp); */


/* // write data to a file as csv format
$fp = fopen($file, 'w');

foreach($students as $student){
    fputcsv($fp, $student, ",");
}

fclose($fp);

// read data from a csv file
$fp = fopen($file, 'r');

while(!feof($fp)){
    print_r( fgetcsv($fp));
}

fclose($fp); */


// add new data to a file
// $fp = fopen($file, 'a');

// $student= array(
//     "fname" => "Rabbil",
//     "lname" => "Hasan",
//     "age"   => 33,
//     "class" => 12,
//     "roll"  => 1
// );

// fputcsv($fp, $student);

// fclose($fp);


// delete 2nd line from the file
$data = file($file);
// print_r($data);
unset($data[1]);

$fp = fopen($file, 'w');

foreach($data as $data){
    fwrite($fp, $data);
}

fclose($fp);