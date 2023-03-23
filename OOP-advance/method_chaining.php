<?php

// make a string replace program using method chaining which will replace a string like this $str->search("Hello")->replace("Dhaka")->uppercase();
// this willl return HELLO DHAKA

class StringUtility{
    private $string;
    private $search;
    public function __construct($string){
        $this->string = $string;
    }

    public function search($string){
        $this->search = $string;
        return $this;
    }

    public function replace($string){
        if(!isset($this->string)){
            throw new Exception("Nothing to replace");
        }
        $this->string = str_replace($this->search, $string, $this->string);

        return $this;
    }

    public function uppercase(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function lowercase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    public function print(){
        echo $this->string;
    }
}

$s = new StringUtility("Hello World");

$s->search("World")->replace("Earth")->search("Hello")->replace("Hi")->uppercase()->print();

