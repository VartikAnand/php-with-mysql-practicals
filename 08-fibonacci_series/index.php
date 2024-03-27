<?php
// Function to generate Fibonacci series
function fibonacci($n) {
    $fib = [0, 1]; // Initialize array with first two Fibonacci numbers

    for ($i = 2; $i < $n; $i++) {
        // Calculate next Fibonacci number by adding the previous two numbers
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

// Number of terms in the Fibonacci series
$terms = 10;

// Print Fibonacci series
echo "Fibonacci series for $terms terms: ";
echo implode(", ", fibonacci($terms));
?>
