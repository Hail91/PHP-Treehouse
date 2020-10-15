<?php
// Logical operators in PHP

// Variables to use for tests.
$a = 5;
$b = 10;

// And operator returns true if BOTH conditions are true.
echo $a and $b; // Should return true since both values are truthy.
echo "\n"; // This can also be represented by ** && **.

// Or Operator returns true if either value is true
echo $a or $b; // Again, will return true since at least one of these is truthy.
echo "\n"; // Can also be represent by ** || **.

// XOR operator returns true if either are true, but NOT both.
echo $a xor $b; // Will return false since BOTH evaluate truthy.
if (!$a xor $b) { // Exlamation here is the 'not' operator, we are checking if the expression evalutes false.
    echo "False, both are true!";
}
echo "\n";
