<?php
//Kazi Shahed Ahmed 
//Task-4
// Creating the array $names

$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

// Define a callback function for array_filter to check if a name starts with 'M'

function startsWithM($name) {
    return substr($name, 0, 1) === 'M';
}

// Using array_filter to filter names starting with 'M'
$filteredNames = array_filter($names, 'startsWithM');

// Printing the filtered names
echo "Names that start with 'M':<br>";
foreach ($filteredNames as $name) {
    echo $name . "<br>";
}

?>
