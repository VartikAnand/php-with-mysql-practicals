##  Write PHP Script to generate result and display grade.



## Code

### index.php


```php

<?php
// Function to calculate grade based on marks
function calculateGrade($marks) {
    $m = $marks;
    if ($m >= 90) {
        return 'A';
    } elseif ($m >= 80) {
        return 'B';
    } elseif ($m >= 70) {
        return 'C';
    } elseif ($m >= 60) {
        return 'D';
    } elseif ($m >= 50) {
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


```

## Output

![Output Image Unavailable](1.png)