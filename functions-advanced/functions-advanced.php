<?php
// Part 1: MD5 Hash Key Occurrence Counter
$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

// Function 1: Count how many times a character occurs in the MD5 hash
function countOccurrence1($needle) {
    global $md5HashKey;
    $count = substr_count($md5HashKey, $needle);
    echo "Function 1: The needle '$needle' occurs $count times in the hash key '$md5HashKey'.<br>";
}

// Function 2: Another approach to counting occurrences (using a loop)
function countOccurrence2($needle) {
    global $md5HashKey;
    $count = 0;
    for ($i = 0; $i < strlen($md5HashKey); $i++) {
        if ($md5HashKey[$i] == $needle) {
            $count++;
        }
    }
    echo "Function 2: The needle '$needle' occurs $count times in the hash key '$md5HashKey'.<br>";
}

// Function 3: Using a regular expression to count occurrences
function countOccurrence3($needle) {
    global $md5HashKey;
    preg_match_all("/$needle/", $md5HashKey, $matches);
    $count = count($matches[0]);
    echo "Function 3: The needle '$needle' occurs $count times in the hash key '$md5HashKey'.<br>";
}

// Call the functions with different arguments
countOccurrence1('2');
countOccurrence2('8');
countOccurrence3('a');
?>


<?php
// Part 2: Angry Birds Game Simulation
$pigHealth = 5;
$maximumThrows = 8;

// Function to calculate whether the hit is successful (40% chance)
function calculateHit() {
    global $pigHealth;
    $hitChance = rand(1, 100); // Random number between 1 and 100
    if ($hitChance <= 40) {
        $pigHealth--; // Decrease pig health if hit
        if ($pigHealth == 1) {
            echo "Hit! There is only 1 pig left.<br>";
        } else {
            echo "Hit! There are only $pigHealth pigs left.<br>";
        }
    } else {
        echo "Miss! $pigHealth pigs left in the team.<br>";
    }
}

// Function to launch the Angry Bird (handles the static variable and recursion)
function launchAngryBird() {
    static $throws = 0;
    global $pigHealth, $maximumThrows;

    // If we have not exceeded the maximum number of throws
    if ($throws < $maximumThrows) {
        $throws++; // Increment the number of throws
        calculateHit(); // Call the calculateHit function

        // Recursively call launchAngryBird if throws are still available
        launchAngryBird();
    } else {
        // After the maximum throws, check if the pig is defeated
        if ($pigHealth == 0) {
            echo "Won!<br>";
        } else {
            echo "Lost!<br>";
        }
    }
}

// Call the launchAngryBird function to start the game
launchAngryBird();
?>
