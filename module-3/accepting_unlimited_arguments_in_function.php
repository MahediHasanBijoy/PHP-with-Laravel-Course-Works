<?php
/**
 *  Unlimited arguments accept in function parameter
 */

 function fruitsName(string $country, string ...$names) {
    echo "This $country has fruits like ".join(', ', $names)."\n";
 }

 // bangladeshi fruits 
 fruitsName('Bangladesh', 'Banana', 'Mango', 'Jackfruit', 'Watermelon');

 // Saudi Arab fruits
 fruitsName("Saudi Arab", "Dates", "Pulm");