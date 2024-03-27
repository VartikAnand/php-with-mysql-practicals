<?php
// Function to find maximum number among three
function findMaximum($num1, $num2, $num3) {
    $max = $num1; // Assume num1 is the maximum
    
    if ($num2 > $max) {
        $max = $num2;
    }
    
    if ($num3 > $max) {
        $max = $num3;
    }

    return $max;
}

// Given numbers
$num1 = 15;
$num2 = 30;
$num3 = 20;

// Find and display maximum number
echo "Given numbers: $num1, $num2, $num3\n";
echo "Maximum number: " . findMaximum($num1, $num2, $num3) . "\n";
?>
