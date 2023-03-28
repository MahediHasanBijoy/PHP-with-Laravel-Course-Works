<?php
// unset() destroys the specified variables.

// $name = "bijoy";
// unset($name);
// echo $name;


$person = ["fname"=>"mahedi", "lname"=>"hasan", "age"=>30, "gender"=>"male"];

unset($person['lname']);

print_r($person);