<!DOCTYPE html>
<html>
<head>
    <title>Logic Checks</title>
</head>
<body>
    <?php
    $textToCheck = "Example";

    // Check 1: More than 5 characters AND starts with capital
    $check1 = (strlen($textToCheck) > 5) && ctype_upper($textToCheck[0]);

    // Check 2: More than 5 characters OR contains letter 'e'
    $check2 = (strlen($textToCheck) > 5) || strpos($textToCheck, 'e') !== false;

    // Check 3: More than 5 characters (written directly)
    $check3 = strlen($textToCheck) > 5;

    // Check 3b: Same logic written differently
    $check3b = strlen($textToCheck) >= 6 ? true : false;

    // Function to convert boolean to word
    function toText($bool) {
        return $bool ? "true" : "false";
    }

    echo "<p>Check 1: " . toText($check1) . "</p>";
    echo "<p>Check 2: " . toText($check2) . "</p>";
    echo "<p>Check 3: " . toText($check3) . "</p>";
    echo "<p>Check 3b: " . toText($check3b) . "</p>";
    ?>
</body>
</html>
