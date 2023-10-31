<?php
// Function to generate the Fibonacci sequence up to a given number of terms
function generateFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Number of terms you want in the Fibonacci sequence
$terms = 10; // Change this to the desired number of terms

if ($terms >= 1) {
    $result = generateFibonacci($terms);
    echo "Fibonacci sequence for the first $terms terms: ";
    echo implode(", ", $result);
} else {
    echo "Please specify a valid number of terms (>= 1) for the Fibonacci sequence.";
}
?>

