<?php
// Read the content of the text file into a variable
$text = file_get_contents('text-file.txt');

// Initialize an array to hold letter counts (A-Z)
$letterCount = array_fill_keys(range('a', 'z'), 0);  // Initialize each letter to 0

// Loop through the text, counting only the letters
foreach (str_split($text) as $char) {
    $char = strtolower($char);  // Convert to lowercase
    if (ctype_alpha($char)) {   // Only count alphabetic characters
        $letterCount[$char]++;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alphabet Analysis - Part 2</title>
</head>
<body>
    <h1>Alphabet Analysis - Part 2</h1>
    <h2>Letter Occurrences in the Text:</h2>
    <ul>
        <?php foreach ($letterCount as $letter => $count): ?>
            <li><?php echo strtoupper($letter) . ' x ' . $count; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
