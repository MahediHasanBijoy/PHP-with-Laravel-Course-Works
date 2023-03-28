<?php

/**
 * Nested Switch Case Statement
 */

// number to check odd or even
$n = -12;

// remainder of $n
$r = $n % 2;

switch ($r) {
    case 0:
        switch ($n) {
            case ($n > 0):
                echo "{$n} is a positive even number.\n";
                break;
            case ($n < 0):
                echo "{$n} is a negative even number.\n";
        }
        break;
        // case -1 or 1
    case -1:
    case 1:
        switch ($n) {
            case ($n > 0):
                echo "{$n} is a positive odd number.\n";
                break;
            case ($n < 0):
                echo "{$n} is a negative odd number.\n";
                break;
        }
        break;
}


// readable version of above code
switch (true) {
    case ($r == 0 && $n > 0):
        echo "{$n} is a positive even number.\n";
        break;
    case ($r == 0 && $n < 0):
        echo "{$n} is a negative even number.\n";
        break;

    case ($r == 1 && $n > 0):
        echo "{$n} is a positive odd number.\n";
        break;
    case ($r == -1 && $n < 0):
        echo "{$n} is a negative odd number.\n";
        break;
}
