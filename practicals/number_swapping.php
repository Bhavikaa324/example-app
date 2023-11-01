<?php
// Define two numbers
$number1 = 5;
$number2 = 10;

echo "Before swapping: ";
// Display initial values
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2 . "\n";

// Swap the numbers using a temporary variable
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "After swapping: ";
// Display swapped values
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2;
?>
