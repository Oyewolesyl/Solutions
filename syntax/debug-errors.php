<?php
	$text = 'Test 123...';  // Correct variable name
	$text2 = 'Test 456';    // Corrected variable name
	$_text3 = 'test';
	$first_sentence = 'Building castles in the sky and in the sand';  // Corrected variable name
	$animal = "Platypus";   // Corrected mismatched quotes
?>

<!DOCTYPE html>
<html>  <!-- Corrected the <mtml> tag to <html> -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/global.css">
	<link rel="stylesheet" type="text/css" href="/css/directory.css">
	<link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>

<body>

	<h1>Debug errors</h1>

	<ul>
        <li>Debug this page so the script runs without error</li>
        <li>Print all the variables in an unordered list below:</li>
    </ul>  

	<ul>
        <li><?php echo $text; ?></li>  <!-- Printing the variable $text -->
        <li><?php echo $text2; ?></li> <!-- Printing the variable $text2 -->
        <li><?php echo $_text3; ?></li>  <!-- Printing the variable $_text3 -->
        <li><?php echo $first_sentence; ?></li>  <!-- Printing the variable $first_sentence -->
        <li><?php echo $animal; ?></li>  <!-- Printing the variable $animal -->
    </ul>

</body>
</html>
