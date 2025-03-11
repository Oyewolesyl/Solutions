<?php
// 1. Create an array with more than 5 animals
$animals = ["Dog", "Cat", "Elephant", "Tiger", "Giraffe", "Lion", "Zebra"];

// 2. Sort the array alphabetically
sort($animals);

// Print sorted array
echo "Sorted animals: " . implode(", ", $animals) . "<br>";

// 3. Create a new array with 3 mammals
$mamals = ["Dolphin", "Kangaroo", "Horse"];

// 4. Merge both arrays
$animals = array_merge($animals, $mamals);

// Print merged array
echo "Merged animals list: " . implode(", ", $animals) . "<br>";

// 5. Count and print the total number of animals
$totalAnimals = count($animals);
echo "Total number of animals after merging: $totalAnimals<br>";
?>
