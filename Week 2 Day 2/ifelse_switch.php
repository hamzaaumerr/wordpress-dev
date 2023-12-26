<?php

$num = 2;

// If the number is 1, print "One"
if ($num == 1) {
    echo "One";
// If the number is 2, print "Two"
} elseif ($num == 2) {
    echo "Two";
// If the number is 3, print "Three"
} elseif ($num == 3) {
    echo "Three";
// If the number is not defined, print "Number not defined"
} else {
    echo "Number not defined";
}

$num = 4;

// Switch statement to check the number
switch ($num) {
    // If the number is 1, print "One"
    case 1:
        echo "One";
        break;
    // If the number is 2, print "Two"
    case 2:
        echo "Two";
        break;
    // If the number is 3, print "Three"
    case 3:
        echo "Three";
        break;
    // If the number is not defined, print "Number not defined"
    default:
        echo "Number not defined";
}
?>