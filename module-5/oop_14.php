<?php
// early binding and late binding

class Planet{
    static public function echoName(){
        // echo self::getName();    // even if calls from childclass it will call its own function
        echo static::getName();     // if calls from childclass then childclass function will execute
    }

    static public function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static public function getName(){
        return "Earth";
    }
}


Planet::echoName();
// Earth::echoName();