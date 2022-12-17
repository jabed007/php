<?php
// Magic constants
echo __DIR__ . '</br>';
echo __FILE__ . '</br>';
echo __LINE__ . '</br>';
// Create directory
//mkdir('test');
// Rename directory
//rename('test2', 'test');
// Delete directory
//rmdir('test');
// Read files and folders inside directory
$files = scandir('../');
echo "<pre>";
print_r($files);
echo "</pre>";

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt') . "</br>";
file_put_contents('sample.txt', 'Some content');
echo file_get_contents('sample.txt') . "</br></br>";
// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson . "</br>";
$users = json_decode($usersJson, true);
echo "<pre>";
print_r($users);
echo "</pre>";
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt'); // true
// is_dir
is_dir('test'); // false
// filemtime
// filesize
// disk_free_space
// file