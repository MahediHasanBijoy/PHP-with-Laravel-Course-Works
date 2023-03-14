<?php

// date_diff() is a built-in function in PHP that is used to calculate the difference between two dates. It returns a DateInterval object that represents the difference between the two dates in terms of years, months, days, hours, minutes, and seconds.

$date1 = new DateTime("12 December 2020");
$date2 = new DateTime("1 January 2023");

$diff = date_diff($date1, $date2);

echo $diff->format("%y Year %m Months %d Days");