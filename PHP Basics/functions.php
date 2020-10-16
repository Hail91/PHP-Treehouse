<?php

// Some basic review of functions in PHP
// Basic function call in PHP
function add($x, $y)
{
    return $x + $y;
};

echo add(5, 10);
echo "\n";
// Global var to test anon function.
$global_v = 'Aaron';

// Anonymous function call (also referred to as a closure)
// We will use a variable declared globally
$greeting = function () use ($global_v) {
    echo "Hello $global_v!";
};

echo $greeting();
echo "\n";
