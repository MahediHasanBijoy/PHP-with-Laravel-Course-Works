<?php

// convert string to unix timestamp

echo mktime(0,0,0,12,12,2020). "\n";
echo strtotime("12 December 2020"). "\n";

// current timestamp
echo time(). "\n";
echo strtotime("now"). "\n";

// timestamp after adding number of days to current time
echo strtotime("+3days"). "\n";

echo date("d/F/Y", strtotime("+3days")). "\n";

// number of months, days between two dates
echo (strtotime("+2 weeks 5 days") - strtotime("now")) / (24*60*60). "\n";

