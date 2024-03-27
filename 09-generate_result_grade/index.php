<?php
// Function to calculate grade based on marks
function calculateGrade($marks) {
    if ($marks >= 90) {
        return 'A';
    } elseif ($marks >= 80) {
        return 'B';
    } elseif ($marks >= 70) {
        return 'C';
    } elseif ($marks >= 60) {
        return 'D';
    } elseif ($marks >= 50) {
        return 'E';
    } else {
        return 'F';
    }
}

// Student's marks
$marks = 85;

// Generate result and display grade
echo "Marks obtained: $marks\n";
echo "Grade: " . calculateGrade($marks) . "\n";
?>
