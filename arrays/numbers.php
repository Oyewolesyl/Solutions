<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted Numbers</title>
</head>
<body>

    <h2>Number Processing</h2>

    <?php
    // 1. Create an array with given values
    $numbers = [8, 7, 8, 7, 3, 2, 1, 2, 4];

    // 2. Remove duplicates
    $uniqueNumbers = array_unique($numbers);

    // 3. Sort from largest to smallest
    rsort($uniqueNumbers);

    // 4. Print the sorted array
    echo "<p>Sorted Unique Numbers (Descending): " . implode(", ", $uniqueNumbers) . "</p>";
    ?>

</body>
</html>
