<?php
// Function to generate the Fibonacci sequence up to a given number of terms
function generateFibonacci($n) {
    $fibonacci = [0,1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Number of terms in the Fibonacci sequence
$noterms = 10; // Change this to the desired number of terms

if ($noterms >= 1) {
	$result = generateFibonacci($noterms);
	// Display fibonacci sequence
    echo "Fibonacci sequence for the first $noterms terms: ";
    echo implode(", ", $result);
} else {
    echo "Please specify a valid number of terms (>= 1) for the Fibonacci sequence.";
}
?>

