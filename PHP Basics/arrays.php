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

// ** Modifying arrays **
// Can simply target the key and overwrite the value
$array_example_1[0] = 7;
print_r($array_example_1);
echo "\n";

// ** array Merge ** will append on array to the end of the other. If duplicate string keys are found, the latter will overwrite the prior.
// If, however, the arrays contain numeric keys, the later value will not overwrite the original value, but will be appended.
// Values in the input arrays with numeric keys will be renumbered with incrementing keys starting from zero in the result array.
$array_example_3 = array("color" => "red", 2, 4);
$array_example_4 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array_example_3, $array_example_4);
print_r($result);

// ** array_combine ** Creates an array by using one array for keys and another for its values.
$first = array('green', 'red', 'yellow');
$second = array('avocado', 'apple', 'banana');
$final = array_combine($first, $second);
print_r($final);
echo "\n";

// ** array_splice** Removes a portion of the array and replaces. Explicitly returns array of extracted elements.
$input_1 = array("red", "green", "blue", "yellow");
array_splice($input_1, 2);
var_dump($input_1);
// Offset starts at 'green', replace 'green' with yellow (ref'd by -1). <-- Output ['red', 'yellow']
$input_2 = array("red", "green", "blue", "yellow");
array_splice($input_2, 1, -1);
var_dump($input_2);
// Offset starts at 'green' and runs to the end of array, replaces 1 ('green') with 'orange. <--- Output ['red, 'orange']
$input_3 = array("red", "green", "blue", "yellow");
array_splice($input_3, 1, count($input_3), "orange");
var_dump($input_3);
// Offset starts at last item (-1 index), replace 1 item ('yellow') with 'black' and 'maroon'. <--- Output ['red', 'green', 'blue', 'black', 'maroon']
$input_4 = array("red", "green", "blue", "yellow");
array_splice($input_4, -1, 1, array("black", "maroon"));
var_dump($input_4);
