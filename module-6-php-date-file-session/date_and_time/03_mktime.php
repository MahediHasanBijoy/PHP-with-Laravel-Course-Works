<?php

// mktime() is a built-in function in PHP that is used to create a Unix timestamp based on a given date and time.
// mktime(hour, minute, second, month, day, year, is_dst);

echo time()."\n";

echo mktime(0,0,0,3,1,2023). "\n";

date_default_timezone_set("Asia/Dhaka");

echo mktime(0,0,0,3,1,2023). "\n";

// GMT format timestamp
echo gmmktime(0,0,0,3,1,2023). "\n";


// date difference of two date
echo (mktime(0,0,0,3,1,2023) - mktime(0,0,0,2,1,2023))/(24*60*60) . " days";
