<?php

// while

// Loop with $counter

// do - while

// for

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach($fruits as $fruit) {
  echo $fruit . "</br>";
}
foreach($fruits as $i => $fruit) {
  echo $i . " " . $fruit . "</br>";
}
// Iterate Over associative array.
$person = [
  'name' => 'Brad',
  'surname' => 'Traversy',
  'age' => 30,
  'hobbies' => ['Tennis', 'Video Games']
];

foreach($person as $key => $value) {
  if(is_array($value)) {
    echo $key . ' ' . implode(',', $value) . "</br>";
  }
  else {
    echo $key . ' ' . $value . '</br>';
  }
}