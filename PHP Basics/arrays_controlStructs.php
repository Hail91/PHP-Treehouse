<?php
// In this file, we'll have code examples of PHP Arrays and control structures.

// ** Conditionals **
// Simple if/elseif/else cascade with two variables.
$a = 10;
$b = '10';

if ($a === $b) {
    echo 'values are equal';
} elseif ($a < $b) {
    echo '$a is less than $b';
} elseif ($a > $b) {
    echo '$a is greater than $b';
} else echo 'values are NOT equal';

echo "\n";

// ** Switch Statement ** (Useful for multiple checks, much cleaner than if/else cascade)
switch (date('l')) {
    case "Monday":
        echo "Wash on Monday";
        echo "\n";
        break;
    case "Tuesday":
        echo "Iron on Tuesday";
        echo "\n";
        break;
    case "Wednesday":
        echo "Mend on Wednesday";
        echo "\n";
        break;
    case "Thursday":
        echo "Churn on Thursday";
        echo "\n";
        break;
    case "Friday":
        echo "Clean on Friday";
        echo "\n";
        break;
    case "Saturday":
        echo "Bake on Saturday";
        echo "\n";
        break;
    case "Sunday":
        echo "Rest on Sunday";
        echo "\n";
        break;
    default:
        echo "I don't know what day it is";
        echo "\n";
        break;
}
