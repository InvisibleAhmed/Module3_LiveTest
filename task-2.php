<?php
//Kazi Shahed Ahmed 
// Task 2:
$student = [
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
];

// Checking if the 'grade' key exists in the array

if (array_key_exists('grade', $student)) {
    echo "'grade' key exists in the array.";
} else {
    echo "'grade' key does not exist in the array.";
}
?>
