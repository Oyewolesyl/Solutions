<?php
// Step 1: Declare two variables for first and last name
$firstName = "John";   // You can replace this with your first name
$lastName = "Doe";     // Replace with your last name

// Step 2: Concatenate the first and last name and assign it to $fullName
$fullName = $firstName . " " . $lastName;

// Step 3: Print the full name inside an HTML paragraph
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Concatenation Example</title>
</head>
<body>

    <p>The full name is: <?php echo $fullName; ?></p>

    <!-- Extra: Display the character count of the full name -->
    <p>The character count of the full name is: <?php echo strlen($fullName); ?></p>

</body>
</html>
