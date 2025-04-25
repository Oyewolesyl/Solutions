<?php

// Part 1: Functions

// Function to calculate sum
function calculateSum($number1, $number2) {
    return $number1 + $number2;
}

// Function to multiply numbers
function multiply($number1, $number2) {
    return $number1 * $number2;
}

// Function to check if a number is even
function isEven($number) {
    return $number % 2 == 0;
}

// Function to return length and uppercase version of a string
function getStringLengthAndUppercase($string) {
    $length = strlen($string);
    $uppercase = strtoupper($string);
    return array('length' => $length, 'uppercase' => $uppercase);
}

// Execute functions and print results
$sum = calculateSum(5, 10);
$product = multiply(5, 10);
$isEvenResult = isEven(6);
$stringResult = getStringLengthAndUppercase('hello world');

echo "Sum: $sum<br>";
echo "Product: $product<br>";
echo "Is 6 even? " . ($isEvenResult ? 'Yes' : 'No') . "<br>";
echo "String Length: " . $stringResult['length'] . "<br>";
echo "String Uppercase: " . $stringResult['uppercase'] . "<br>";


// Part 2: Functions

// Function to print array values
function printArray($array) {
    foreach ($array as $key => $value) {
        echo "heroes[ $key ] has value '$value'<br>";
    }
}

// Sample array for heroes
$heroes = array("Roger Penrose", "Neil deGrasse Tyson", "Carl Sagan");

// Print array values
printArray($heroes);

// Function to validate HTML tags
function validateHtmlTag($html) {
    return preg_match('/<html>.*<\/html>/', $html) ? 'Valid HTML tag' : 'Invalid HTML tag';
}

// Sample HTML to validate
$html = "<html><body>Hello World</body></html>";
echo validateHtmlTag($html) . "<br>";

?>
