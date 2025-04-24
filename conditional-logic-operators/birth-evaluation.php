<!DOCTYPE html>
<html>
<head>
    <title>Birth Evaluation</title>
    <style>
        .applicable {
            background-color: green;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    $yearOfBirth = 1993;
    $monthOfBirth = 05;

    $isOddYear = $yearOfBirth % 2 !== 0;
    $isAbove1994 = $yearOfBirth > 1994;
    $isMonthFirstHalf = $monthOfBirth <= 6;

    // Logic: Apply if year is odd or above 1994 OR month in first half
    $doesApply = $isOddYear || $isAbove1994 || $isMonthFirstHalf;

    if ($doesApply) {
        echo '<p class="applicable">You apply</p>';
    } else {
        echo '<p>You do not apply</p>';
    }
    ?>
</body>
</html>
