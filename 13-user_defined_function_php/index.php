<?php

function calculateRectangleArea($length, $width) {
    $area = $length * $width;
    return $area;
}


$length = 5;
$width = 3;


echo "Length of the rectangle: $length units\n";
echo "Width of the rectangle: $width units\n";
echo "Area of the rectangle: " . calculateRectangleArea($length, $width) . " square units\n";
?>
