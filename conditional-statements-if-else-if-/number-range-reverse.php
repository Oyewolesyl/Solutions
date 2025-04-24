<!DOCTYPE html>
<html>
<head>
    <title>Number Range and Reverse</title>
</head>
<body>

<?php
// Step 1: Create a number between 1 and 100
$number = rand(1, 100); // You can also manually set it: $number = 42;

// Step 2: Find the lower and upper tens
$lower = floor($number / 10) * 10;
$upper = $lower + 10;

// Edge case: If the number is 100
if ($number === 100) {
    $lower = 90;
    $upper = 100;
}

// Step 3: Create the message
$message = "The number lies between $lower and $upper";

// Step 4: Print original message
echo "<p>Original message: $message</p>";

// Step 5: Reverse the message
$reversed = strrev($message);

// Step 6: Print reversed message
echo "<p>Reversed message: $reversed</p>";
?>

</body>
</html>
