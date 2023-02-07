<?php
/**
 *  Finding grade using switch case statement
 */

 $marks = 100;

switch ($marks) {
    case $marks>=33 && $marks<40:
        echo "Congrates! You have passed with Grade: C";
        break;
    case $marks>=40 && $marks<50:
        echo "Congrates! You have passed with Grade: B";
        break;
    case $marks>=50 && $marks<60:
        echo "Congrates! You have passed with Grade: B+";
        break;
    case $marks>=60 && $marks<70:
        echo "Congrates! You have passed with Grade: A-";
        break;
    case $marks>=70 && $marks<80:
        echo "Congrates! You have passed with Grade: A";
        break;
    case $marks>=80 && $marks<=100:
        echo "Congrates! You have passed with Grade: A+";
        break;
    default:
        echo "You have Failed!";
        break;
}