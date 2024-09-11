<?php

declare(strict_types=1);

$test = "Daniel"; // anything declared outside a function or a class it is inside a global scope 

function myFunc()
{
    // to get a global variable and use in the 
    global $test; 
    // or $GLOBALS["test] but don't use global vars this way pass them as arguments 

    // locally scoped can only be accessed within th function 
    $localVariable = "Hello " . $test;

    return $localVariable;
}



function increaseCounter() {
    // Static variable that retains its value between function calls
    static $counter = 0;

    // Increment the counter
    $counter++;

    // Return the current value of the counter
    return $counter;
}

// Calling the function multiple times
echo increaseCounter(); // Output: 1
echo "\n";
echo increaseCounter(); // Output: 2
echo "\n";
echo increaseCounter(); // Output: 3