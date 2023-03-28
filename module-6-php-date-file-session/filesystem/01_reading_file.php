<?php

$fileName = "\\Users\\bijoy\\Desktop\\Ostad-php-laravel\\module-6\\filesystem\\data\\f1.txt";

// check if file is readable
if(is_readable($fileName)){
    echo "readable";
}else{
    echo "not readable";
}

// open a file stream
$filePointer = fopen($fileName, 'r');

// read a single line
// echo fgets($filePointer);
// echo fgets($filePointer);

// read a complete file
// while($line = fgets($filePointer)){
//     echo $line;
// }

// set the filepointer to the start position
// rewind($filePointer);

// move a file pointer to a specific position
fseek($filePointer, 0);

while($line = fgets($filePointer)){
    echo $line;
}


// closing a file
fclose($filePointer);



// read a file and store it as an array
$data = file($fileName);
print_r($data);


// read a file completely
$content = file_get_contents($fileName);
echo $content;