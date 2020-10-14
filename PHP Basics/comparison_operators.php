<?php

// In this file we'll list out all comparison operators with examples of them in use.

// ** Equality Operator **
// Will return bool true, as PHP will 'coerce' the type to match. (Only checks values)
var_dump(10 == '10');
echo "\n";

// ** Identical Equality **
// Will return a bool after checking value AND type. (no coercion)
var_dump(10 === '10');
echo "\n";

// ** Loose Inequality **
// Will return a bool check after type coercion. 
// In this case, it's true because the values are different even after '6' is coerced to an integer.
var_dump(5 != '6');
echo "\n";

// ** Strict Inequality **
// Will return a bool check after checking BOTH the value AND the type.
// In this case, value AND type are different, therefore it'll return true.
var_dump(5 !== '6');
echo "\n";

// ** Not Equal Operator **
// Will return a bool determining equality after coercion. <-- Seems like its the same as '!='.
var_dump(5 <> '6');
echo "\n";

// ** Less Than Operator **
// Return Bool if one value is less than the other
var_dump(5 < 6);
echo "\n";

// ** Greater Than Operator **
// Return Bool if one value is less than the other
var_dump(5 > 6);
echo "\n";

// ** Less Than or equal to Operator **
// Return Bool if one value is less than or equal to the other.
var_dump(5 <= 5);
echo "\n";

// ** Greater Than or equal to Operator **
// Return Bool if one value is Greater than or equal to the other.
var_dump(6 >= 3);
echo "\n";

// ** Spaceship Operator (New in PHP 7) **
// Returns -1 if value on left is less than value on right
// Returns 0 if values are equal
// Returns 1 if value on left is greater than value on right
var_dump(8 <=> 7);
echo "\n";

// ** Nullish coalescing operator (New in PHP 7) **
// Returns first value found that is NOT Null, if no values meeting that criteria are
// Found, it will return Null.
var_dump(null ?? 3);
echo "\n";
