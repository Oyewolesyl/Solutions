<?php
// Recursive function to calculate the money after each year
function calculateMoney($money, $year) {
    // If we reached 10 years, stop recursion
    if ($year == 0) {
        return $money; // Return the final value when 10 years is reached
    }

    // Calculate the money with interest for the current year
    $newAmount = floor($money * 1.08); // Applying 8% interest and rounding down

    // Print the amount for the current year
    echo "Year " . (11 - $year) . ": €" . $newAmount . "<br>";

    // Recursively call the function for the next year
    return calculateMoney($newAmount, $year - 1);
}

// Initial amount of money
$initialMoney = 100000; // Hans' starting money
$years = 10; // The number of years to calculate for

// Start the recursive calculation
echo "Starting money: €" . $initialMoney . "<br>";
calculateMoney($initialMoney, $years);
?>
