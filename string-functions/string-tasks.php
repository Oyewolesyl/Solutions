<!DOCTYPE html>
<html>
<head>
  <title>String Functions in PHP</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    p { margin-bottom: 12px; }
  </style>
</head>
<body>
  <?php
    // Part 1
    $fruit = "coconut";
    echo "<p>Fruit: $fruit</p>";
    echo "<p>Number of characters: " . strlen($fruit) . "</p>";
    echo "<p>Position of first 'o': " . strpos($fruit, 'o') . "</p>";

    echo "<hr>";

    // Part 2
    $fruit = "pineable";
    echo "<p>New fruit: $fruit</p>";
    echo "<p>Position of last 'a': " . strrpos($fruit, 'a') . "</p>";
    echo "<p>Uppercase fruit: " . strtoupper($fruit) . "</p>";

    echo "<hr>";

    // Part 3
    $letter = 'e';
    $number = 3;
    $longestWord = 'pneumonoultramicroscopicsilicovolcanoconiosis';

    $replacedWord = str_replace($letter, $number, $longestWord);
    echo "<p>Original word: $longestWord</p>";
    echo "<p>Replaced word: $replacedWord</p>";
  ?>
</body>
</html>
