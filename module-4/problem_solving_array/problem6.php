<?php
// 6.Problem: Find the most frequent item in an array of strings:
$colors = array("red", "blue", "green", "blue", "yellow", "red", "blue", "green", "green");

// count colors occurances
$color_count = array_count_values($colors);
arsort($color_count);

echo array_keys($color_count)[0];
