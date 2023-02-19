<?php
/**
 * Associative array to serialize and json data conversion
 */

$students = array(
    "fname"=>"mahedi",
    "lname"=>"hasan",
    "age"  => 28,
    "roll" => 10,
    "class"=> 12
);

// serialize — Generates a storable representation of a value
// $serialized = serialize($students);
// echo $serialized;

// unserialize — Creates a PHP value from a stored representation
// $std = unserialize($serialized);
// print_r($std);

// json_encode — Returns the JSON representation of a value
$json_data = json_encode($students);
echo $json_data;

// json_decode — Decodes a JSON string
// Second parameter When true, JSON objects will be returned as associative arrays; when false, JSON objects will be returned as objects.
$student = json_decode($json_data, true);
print_r($student);

