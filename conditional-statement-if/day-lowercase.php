<!-- solutions/conditional-statements-if/day_lowercase.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <?php
        $number = 3; // Change this to test different numbers between 1 and 7
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

        echo "Day: $day";
    ?>
</body>
</html>
