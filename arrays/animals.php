<?php
// 1. Create an array with more than 5 animals
$animals = ["Dog", "Cat", "Elephant", "Tiger", "Giraffe", "Lion", "Zebra"];

// 2. Calculate the number of elements in the array and print it
$totalAnimals = count($animals);
echo "Total number of animals: $totalAnimals<br>";

// 3. Search for an animal in the array
$teZoekenDier = "Tiger"; // Change this variable to search for a different animal
if (in_array($teZoekenDier, $animals)) {
    echo "$teZoekenDier was found in the array.";
} else {
    echo "$teZoekenDier was not found in the array.";
}
?>
