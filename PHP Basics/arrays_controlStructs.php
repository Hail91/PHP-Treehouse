<?php
// In this file, we'll have code examples of PHP Arrays and control structures.

// ** Conditionals **
// Simple if/elseif/else cascade with two variables.
$a = 10;
$b = '10';

if ($a === $b) {
    echo ' values are equal ';
} elseif ($a < $b) {
    echo ' $a is less than $b ';
} elseif ($a > $b) {
    echo ' $a is greater than $b ';
} else echo ' values are NOT equal ';
