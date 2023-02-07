<?php
/**
 *  Operator precedence
 */

 $f = false || true;    // precedency of = is lower than ||
 $e = false or true;    // precedency of = is higher than or / ($e=false) or true

 var_dump($f, $e);

 $n = true && false;    // precedency of = is lower than &&
 $m = true and false;   // precedency of = is higher than and / ($m=true) and false

 var_dump($n, $m);