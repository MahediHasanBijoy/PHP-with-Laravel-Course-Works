<?php
$fruits = ['a'=>'apple', 'b'=>'banana', 'c'=>"mango", 'd'=>'dates', 'e'=>'pulm'];
$numbers = array(2,1,4,3,"5",2,9,11,30);

// in_array():bool checks if a value exists in an array / strict mode checks type 
if(in_array(5, $numbers, true)){
    echo "exists".PHP_EOL;
}else{
    echo "not exists".PHP_EOL;
}

// array_search():key returns key of element if found / strict mode checks type
$offset = array_search(5, $numbers);
echo $offset.PHP_EOL;


// key_exists():bool checks if a key exists in an array
if(key_exists('c', $fruits)){
    echo $fruits['c'].PHP_EOL;
}else{
    echo "not found".PHP_EOL;
}