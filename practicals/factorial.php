<?php
// Function to calculate the factorial of a number
function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($n == 0) {
        return 1; // Factorial of 0 is 1
    } else {
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            $result *= $i;
        }
        return $result;
    }
}

// Number for which you want to calculate the factorial
$number = 5; // Change this to the desired number

if ($number >= 0) {
    $fact = factorial($number);
    echo "Factorial of $number is $fact";
} else {
    echo "Factorial is not defined for negative numbers.";
}
?>

