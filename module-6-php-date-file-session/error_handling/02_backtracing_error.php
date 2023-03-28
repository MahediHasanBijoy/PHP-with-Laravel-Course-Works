<?php

// finding error occur in code using backtracing

function x($a){
    y($a);
}

function y($b){
    z($b*2);
}

function z($c){
    if($c < 30){
        // throw an error
        trigger_error("too small", E_USER_WARNING);
    }else{
        echo "$c is okay\n";
    }

    debug_print_backtrace();
}

function w($d, $e){
    x($d+$e);
}

// function call
w(2,3);

w(3,4);