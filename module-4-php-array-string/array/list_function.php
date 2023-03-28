<?php
// list() is used to assign a list of variables in one operation
$colors = ['red', 'green', 'blue'];
// $color1 = $colors[0];
// $color2 = $colors[1];
// $color3 = $colors[2];

// echo $color2;

list($color1, $color2, $color3) = $colors;
echo $color1;

