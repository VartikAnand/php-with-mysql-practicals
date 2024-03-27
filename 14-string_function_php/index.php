<?php

$string = "Hello, World!";


echo "Original string: $string</br>";
echo "1. Length of the string: " . strlen($string) . " characters</br>";
echo "2. Uppercase: " . strtoupper($string) . "</br>";
echo "3. Lowercase: " . strtolower($string) . "</br>";
echo "4. First character uppercase: " . ucfirst($string) . "</br>";
echo "5. First character of each word uppercase: " . ucwords($string) . "</br>";
echo "6. Reversed string: " . strrev($string) . "</br>";
echo "7. Position of 'World': " . strpos($string, 'World') . "</br>";
echo "8. Replaced 'World' with 'PHP': " . str_replace('World', 'PHP', $string) . "</br>";
?>
