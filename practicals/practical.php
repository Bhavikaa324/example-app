<?php
namespace practicals;;
class Practical {
    // Static function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!\n";
    }

    // Static function to add two numbers and return the sum
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Static function to generate a Fibonacci sequence and return an array
    public static function generateFibonacciSequence($n) {
        $sequence = array();
        if ($n >= 1) {
            $sequence[] = 0; // First element of the sequence
        }
        if ($n >= 2) {
            $sequence[] = 1; // Second element of the sequence
        }
        for ($i = 2; $i < $n; $i++) {
            // Calculate the next Fibonacci number by summing the last two numbers
            $next = $sequence[$i - 1] + $sequence[$i - 2];
            $sequence[] = $next;
        }
        return $sequence;
    }
}

// Example usage of the Practical class
Practical::printHello();

$result = Practical::add(5, 7);
echo "Sum: " . $result . "\n";

$fibonacciSequence = Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . "\n";
?>
