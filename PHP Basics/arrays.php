<?php
// ** Arrays in PHP ** (Arrays in PHP are actually implemented as maps(key:val pairs))

// Arrays can be assigned in more than one way, a few are below.
$array_example_1 = array(1, 2, 3, 4, 5);
print_r($array_example_1);
echo "\n";

$array_example_2 = [6, 7, 8, 9, 10];
print_r($array_example_2);
echo "\n";

// There are a few ways to add/remove values from a PHP array (listed below).
// #1 array_push (adds item to end of array)
array_push($array_example_1, '6');
print_r($array_example_1);
echo "\n";
// #2 $array[] = value (adds item to end of array)
$array_example_2[] = 11;
print_r($array_example_2);
echo "\n";

// You can also add a value to the front of an array (prepend) with array_unshift()
array_unshift($array_example_1, 0);
print_r($array_example_1);
echo "\n";

// Remove value from the beginning of an array with array_shift()
array_shift($array_example_1);
print_r($array_example_1);
echo "\n";

// Remove value from the end of an array with array_pop()
array_pop($array_example_1);
print_r($array_example_1);
echo "\n";

// Remove specific variable(s)/element(s) from the array with unset()
unset($array_example_1[0]);
print_r($array_example_1);
echo "\n";

// ** array_values() will essentially reset the array's keys (useful after an unset operatior) **
print_r(array_values($array_example_1));
