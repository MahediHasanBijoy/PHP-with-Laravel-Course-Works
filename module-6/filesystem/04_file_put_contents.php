<?php
//  Write data to a file

$filename = "C:/Users/bijoy/Desktop/Ostad-php-laravel/module-6/filesystem/data/data.txt";

// FILE_APPEND will append data
file_put_contents($filename, "Mahedi\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Hasan\n", FILE_APPEND | LOCK_EX);
file_put_contents($filename, "Bijoy\n", FILE_APPEND | LOCK_EX);


// without FILE_APPEND data will replace the previous data 
file_put_contents($filename, "Mango\nBanana\nApple", LOCK_EX);


$data = file_get_contents($filename);
echo $data;