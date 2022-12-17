<?php

// Function which prints "Hello I am Zura"

// Function with argument

// Create sum of two functions

// Create function to sum all numbers using ...$nums
function sum (...$nums) {
  // echo "<pre>";
  // print_r($nums);
  // echo "</pre>";
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num;
  }
  return $sum;
}

echo sum(1, 2, 3, 4, 5);
// Arrow functions
