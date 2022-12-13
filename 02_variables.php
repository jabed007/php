<?php

// What is a variable

// Variable types

// Declare variables
$name = "Md. Jabed Hossain";
$age = 28;
$isMale = true;
$height = 5.7;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . "</br>";
echo $age . "</br>";
echo $isMale . "</br>";
echo $height . "</br>";
echo $salary . "</br>";

// Print types of the variables
echo gettype($name);
echo "<br>";
echo gettype($age)."<br>";
echo gettype($isMale) . "</br>";
echo gettype($height) . "</br>";
echo gettype($salary) . "</br>";

// Print the whole variable
var_dump($name);
var_dump($age);
var_dump($isMale);
var_dump($height);
var_dump($salary);
echo "</br>";

// Change the value of the variable
$name = true;

// Print type of the variable
echo $name;

// Variable checking functions
echo "</br>";
echo is_int($age); // true;
echo "</br>";
echo is_string($name);
echo "</br>";
echo is_bool($isMale) . "</br>";

// Check if variable is defined
isset($name);
isset($age);
isset($address);

// Constants
define('PI', 3.14146);
echo PI . "</br>";
// Using PHP built-in constants
echo SORT_ASC . "</br>";
echo PHP_INT_MAX . "</br>";
?>
