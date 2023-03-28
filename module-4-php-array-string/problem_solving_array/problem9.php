<?php
// 9.Problem :Flatten a multi-dimensional array into a single array of values:

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  );

$flat = array_merge(...$matrix);

print_r($flat);