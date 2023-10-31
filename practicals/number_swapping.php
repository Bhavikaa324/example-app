<?php
// Define two numbers
$number1 = 5;
$number2 = 10;

echo "Before swapping: ";
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2 . "<br>";

// Swap the numbers using a temporary variable
$temp = $number1;
$number1 = $number2;
$number2 = $temp;

echo "After swapping: ";
echo "Number 1 = " . $number1 . ", Number 2 = " . $number2;
?>
