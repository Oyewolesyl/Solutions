<!-- solutions/conditional-statements-if/day_transformed.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Transformed Day</title>
</head>
<body>
    <?php
        $number = 5; // Try any number between 1 and 7
        $day = "";

        if ($number == 1) {
            $day = "monday";
        } elseif ($number == 2) {
            $day = "tuesday";
        } elseif ($number == 3) {
            $day = "wednesday";
        } elseif ($number == 4) {
            $day = "thursday";
        } elseif ($number == 5) {
            $day = "friday";
        } elseif ($number == 6) {
            $day = "saturday";
        } elseif ($number == 7) {
            $day = "sunday";
        }

        // Convert to all uppercase
        $day_upper = strtoupper($day);

        // Convert to uppercase except all 'a's lowercase
        $day_upper_except_a = str_replace("A", "a", $day_upper);

        // Convert to uppercase except the last 'a' lowercase
        $last_a_position = strrpos($day_upper, "A");
        if ($last_a_position !== false) {
            $day_upper_last_a_lower = substr_replace($day_upper, "a", $last_a_position, 1);
        } else {
            $day_upper_last_a_lower = $day_upper;
        }

        echo "<p>Original lowercase day: $day</p>";
        echo "<p>All uppercase: $day_upper</p>";
        echo "<p>Uppercase except all 'a' lowercase: $day_upper_except_a</p>";
        echo "<p>Uppercase except last 'a' lowercase: $day_upper_last_a_lower</p>";
    ?>
</body>
</html>
