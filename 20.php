<?php
$number = 12345;
$numberString = (string) $number;
$firstDigit = $numberString[0];
$lastDigit = $numberString[strlen($numberString) - 1];
echo "First digit: $firstDigit\n";
echo "Last digit: $lastDigit";
?>