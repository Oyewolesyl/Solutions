<?php
// Part 1
echo "<h2>Part 1: Numbers</h2>";
$i = 0;
while ($i <= 100) {
    echo $i;
    echo $i < 100 ? ", " : ""; // Avoid trailing comma
    $i++;
}

echo "<br><br>";

// Part 1 - second condition
echo "Numbers divisible by 3, >40 and <80:<br>";
$i = 41;
while ($i < 80) {
    if ($i % 3 === 0) {
        echo $i . " ";
    }
    $i++;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Looping While</title>
    <style>
        .even {
            background-color: lightgreen;
        }
        table {
            border-collapse: collapse;
        }
        td {
            width: 30px;
            text-align: center;
            padding: 4px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<h2>Part 2: Multiplication Tables</h2>
<table>
    <?php
    $row = 0;
    while ($row <= 10) {
        echo "<tr>";
        $col = 1;
        while ($col <= 10) {
            $product = $row * $col;
            $class = ($product % 2 === 0) ? "even" : "";
            echo "<td class='$class'>$product</td>";
            $col++;
        }
        echo "</tr>";
        $row++;
    }
    ?>
</table>

</body>
</html>

