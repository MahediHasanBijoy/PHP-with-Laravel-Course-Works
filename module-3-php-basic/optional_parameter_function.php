<?php
/**
 *  function's optional or default parameter
 */

function orderFood($name, $quantity=1){
    if($quantity < 1){
        echo "you must order one piece of food item at least\n";
    }else if($quantity == 1){
        echo "$quantity piece of $name is served\n";
    }else{
        echo "$quantity pieces of $name are served\n";
    }
    
}

orderFood('cake');
orderFood('burger', 5);
orderFood('tea', 0);