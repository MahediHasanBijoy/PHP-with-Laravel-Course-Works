<?php
// comparing objects

class Planet{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e2 = new Planet("Earth");
$m = new Planet("Mars");

$e3 = $e;


if($e === $e3){
    echo "Similar Planets";
}else{
    echo "Not similar planets";
}

