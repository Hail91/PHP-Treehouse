<?php
// ** Loops in PHP **

// Basic For loop.
$num = 10;

for ($i = 0; $i < $num; $i++) {
    print_r($i);
    echo "\n";
};
echo "\n";

// Basic While Loop.
$current_year = date('Y');
$start_year = $currentYear - 100;

// Want to print out the last 100 years.
while ($start_year <= $current_year) {
    echo $start_year . "\n";
    $start_year++;
};

// Do-While to print last 100 years.
do {
    echo $start_year . "\n";
} while (++$start_year <= $current_year);

// ** List construct in PHP ** <-- Assign variables as if they were an array.
$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink,, $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list(,, $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL

// ** foreach loop in PHP **
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
print_r($arr);
echo "\n";
unset($value); // break the reference with the last element
