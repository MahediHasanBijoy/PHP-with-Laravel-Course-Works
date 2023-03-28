<?php
// single quoted string doesn't parse any variable and escape characters
// double quoted string parse variable and escape characters

$name = "bijoy";

$string1 = 'Hi my name is $name\n';
$string2 = "hi my name is $name\n";

echo $string1;
echo PHP_EOL;
echo $string2;


// another way of writing string is heredoc and nowdoc
// heredoc acts like double quote with multiple line string
$heredoc = <<<BIJOY
Hello world,
This is $name speaking,\n
I am new to PHP programming.
BIJOY;

echo $heredoc.PHP_EOL;


// nowdoc acts like single quote multiple line string
$nowdoc = <<<'EOD'
    This is nowdoc
$name won't parse as variable
    \n won't parse to newline
EOD;

echo $nowdoc;