<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Get element by index
echo $fruits[0] . "</br>";
echo $fruits[1] . "</br>";

// Set element by index
$fruits[0] = "Peace";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Check if array has element at index 2
echo isset($fruits[0]) . "</br>"; // true
echo isset($fruits[1]) . "</br>";
echo isset($fruits[2]) . "</br>"; // true
echo isset($fruits[3]) . "</br>"; // false

// Append element
$fruits[] = "Banana";
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Print the length of the array
echo count($fruits) . "</br>";

// Add element at the end of the array
echo array_push($fruits, "Mango");
array_push($fruits, "foo");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the end of the array
echo array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array
array_unshift($fruits, "Lemon");
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the beginning of the array
echo array_shift($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Split the string into an array
$string = "Banana, Apple, Peach";

echo "<pre>";
var_dump(explode(",", $string));
echo "</pre>";
echo "</br>";
// Combine array elements into string
echo implode(",", $fruits) . "</br>";

// Check if element exist in the array
$result = in_array("Apple", $fruits);
echo $result . "</br>";

echo "<pre>";
var_dump(in_array("Jack Fruits", $fruits));
echo "</pre>";

// Search element index in the array
echo array_search("Peaces", $fruits) . "</br>";
echo "<pre>";
var_dump(array_search("Banana", $fruits));
echo "</pre>";
// Merge two arrays
$vegetables = ["Potato", "Cucumber"];
$mergedArray = array_merge($fruits, $vegetables);
echo "<pre>";
var_dump($mergedArray);
var_dump([...$fruits, ...$vegetables]);
echo "</pre>";


// Sorting of array (Reverse order also)
echo "<pre>";
var_dump($fruits);
echo "</pre>";
sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Sorting of array (Reverse order)
rsort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
  'name' => 'Brad',
  'surname' => 'Traversy',
  'age' => 30,
  'hobbies' => ['Tennis', 'Video Game']
];

// Print the associative array
echo "<pre>";
print_r($person);
echo "</pre>";

// Get element by key
echo $person['name'] . "<br>";
echo $person['surname'];
// Set element by key
$person['channel'] = 'Traversy Media';
echo "<pre>";
print_r($person);
echo "</pre>";
// Null coalescing assignment operator. Since PHP 7.4
/*
if (!isset($person['address'])) {
  $person['address'] = 'unknown';
}

echo "<pre>";
print_r($person);
echo "</pre>";
*/
// Shortcut way of Null coalescing assignment operator
$person['address'] = $person['address'] ?? 'Unknown';
echo "<pre>";
print_r($person);
echo "</pre>";
// Check if array has specific key

// Print the keys of the array
echo "<pre>";
print_r(array_keys($person));
echo "</pre>";
// Print the values of the array
echo "<pre>";
print_r(array_values($person));
echo "</pre>";
// Sorting associative arrays by values, by keys
ksort($person);
echo "<pre>";
print_r($person);
echo "</pre>";
// Two dimensional arrays
echo "Two dimensional array" . "</br>";
$todos = [
  [
    'title' => 'Todo title 1',
    'completed' => false
  ], 
  [
    'title' => 'Todo title 2',
    'completed' => true
  ]
];

echo "<pre>";
print_r($todos);
echo "</pre>";