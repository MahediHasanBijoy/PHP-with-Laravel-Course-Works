<?php
// isset() Determine if a variable is declared and is different than null
// $name;
// $name = "";
// $name = null;
// $name = 0;

// if(isset($name)){
//     echo "name is set";
// }else{
//     echo "name is not set";
// }


// empty() Returns true if var does not exist or has a value that is empty or equal to zero or false

// $name2;
// $name2 = "";
// $name2 = false;
// $name2 = 0;
// $name2 = "bijoy";
// if(empty($name2)){
//     echo "name is empty";
// }else{
//     echo "name is not empty";
// }


// to consider 0 as not empty use this condition

// $name3;
// $name3 = "";
// $name3 = false;
$name3 = 0;
// $name3 = "bijoy";

if(isset($name3) && (is_numeric($name3) || $name3 != '')){
    echo "name is not empty";
}else{
    echo "name is empty";
}