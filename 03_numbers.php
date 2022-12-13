<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b + $c;
echo "</br>";
echo $a + $b * $c;
echo "</br>";
echo ($a + $b) * $c;
echo "</br>";
echo $a - $b . "</br>";
echo $a * $b . "</br>";
echo $a / $b . "</br>";
//echo $a % $b . "</br>";

// Assignment with math operators

// Increment operator

// Decrement operator

// Number checking functions
echo is_float(1.25) . "</br>"; // true
echo is_double(1.25) . "</br>"; // true
echo is_int(5) . "</br>"; // true
echo is_numeric("3.45") . "</br>"; // true
echo is_numeric("3g.45") . "</br>"; // false
// Conversion
$strNumber = "12.45";
echo $strNumber . "</br>";
var_dump($strNumber);
echo "</br>";
$number = (float)$strNumber;
echo $number . "</br>";
var_dump($number);
echo "</br>";

$intNumber = intval($number);
echo $intNumber . "</br>";
var_dump($intNumber);
echo "</br></br>";


// Number functions
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3, 9) " . max(2, 3, 9) . '<br>';
echo "min(2, 3, 0) " . min(2, 3, 0) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, ".", ",");
// https://www.php.net/manual/en/ref.math.php
