<?php
// Read the content of the text file into a variable
$text = file_get_contents('text-file.txt');

// Split the text into an array of characters
$textChars = str_split($text);

// Sort the array from Z to A
arsort($textChars);

// Reverse the array
$textChars = array_reverse($textChars);

// Initialize an array to hold character occurrences
$charCount = [];

// Loop through the array and count occurrences of each character
foreach ($textChars as $char) {
    // Ignore non-alphabetic characters (if needed)
    if (ctype_alpha($char)) {
        $char = strtolower($char);  // Convert to lowercase to count both cases as same
        if (isset($charCount[$char])) {
            $charCount[$char]++;
        } else {
            $charCount[$char] = 1;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Analysis - Part 1</title>
</head>
<body>
    <h1>Text Analysis - Part 1</h1>
    <p>How many different characters occurred in the text: <?php echo count($charCount); ?></p>

    <h2>Character Occurrences:</h2>
    <ul>
        <?php foreach ($charCount as $char => $count): ?>
            <li><?php echo strtoupper($char) . ' x ' . $count; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

