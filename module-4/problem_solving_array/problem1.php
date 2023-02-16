<?php

//1.Problem: Sort an array of student names by their average test scores, in descending order:

$students = array(
  "Alice" => array(75, 85, 90),
  "Bob" => array(80, 90, 95),
  "Charlie" => array(85, 75, 80)
);

foreach($students as $key=>$val){
    $students[$key]['avg'] = array_sum($val)/count($val);
}

uasort($students, function($a, $b){
    return $b['avg']<=>$a['avg'];
});

foreach($students as $key=>$val){
    echo "name: {$key} {$val["avg"]}\n";
}
