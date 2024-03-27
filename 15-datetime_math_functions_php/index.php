<?php

echo "Current date and time: " . date("Y-m-d H:i:s") . "</br>";


$number = 16.78;
echo "Square root of $number: " . sqrt($number) . "</br>";
echo "Ceiling of $number: " . ceil($number) . "</br>";
echo "Floor of $number: " . floor($number) . "</br>";
echo "Absolute value of $number: " . abs($number) . "</br>";

$angleInDegrees = 45;
$angleInRadians = deg2rad($angleInDegrees);
echo "Sine of $angleInDegrees degrees: " . sin($angleInRadians) . "</br>";
echo "Cosine of $angleInDegrees degrees: " . cos($angleInRadians) . "</br>";
?>
