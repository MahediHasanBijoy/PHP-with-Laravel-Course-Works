<?php
// copy by value / deep copy
$person = array("fname"=>"mahedi", "lname"=>"hasan");

$copied_person = $person;

$copied_person["lname"] = "bijoy";

// print_r($person);
// print_r($copied_person);

// copy by reference / shallow copy

$person2 = array("fname"=>"lionel", "lname"=>"messi");
$referenced_person2 = &$person2;
$referenced_person2["lname"] = "Scaloni";

print_r($person2);
print_r($referenced_person2);
