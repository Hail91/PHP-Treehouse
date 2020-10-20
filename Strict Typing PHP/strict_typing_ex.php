<?php
declare(strict_types = 1);
// Example of strict typing as of PHP 7
function getTotal(float $a, float $b) : float { // Return type declaration after :
    return $a + $b;
}
 // Int values will be converted to float, anything else will throw an Exception.
echo getTotal(2.2, 3.3); 
echo "\n";