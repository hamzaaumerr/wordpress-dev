<?php

// This function prints a table of the multiplication table of a given number
function printTable($number) {
    // Initialize counter variable
    $i = 1;
    // Loop through the table 10 times
    while ($i <= 10) {
        // Print the table row
        echo $number . " x " . $i . " = " . ($number * $i) . "\n";
        // Increment the counter
        $i++;
    }
}

// Call the function with the number 2
printTable(2);
// Call the function with the number 7
printTable(7);
?>