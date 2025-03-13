<?php
// 1. Create an array with the numbers 1, 2, 3, 4, 5
$numbers1 = [1, 2, 3, 4, 5];

// 2. Multiply all numbers together and print the result
$product = array_product($numbers1);
echo "Product of all numbers: $product<br>";

// 3. Print the odd numbers using an operator
echo "Odd numbers: ";
foreach ($numbers1 as $num) {
    if ($num % 2 != 0) { // Check if the number is odd
        echo "$num ";
    }
}
echo "<br>";

// 4. Create a second array with the numbers 5, 4, 3, 2, 1
$numbers2 = [5, 4, 3, 2, 1];

// 5. Add the numbers from both arrays with the same index together
$sumArray = [];
for ($i = 0; $i < count($numbers1); $i++) {
    $sumArray[] = $numbers1[$i] + $numbers2[$i];
}

// Print the summed numbers
echo "Sum of corresponding indices: " . implode(", ", $sumArray);
?>
