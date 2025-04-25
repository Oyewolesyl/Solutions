<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Looping For Task</title>
	<style>
		table {
			border-collapse: collapse;
		}
		td {
			padding: 5px 10px;
			border: 1px solid #ccc;
			text-align: center;
		}
		.even {
			background-color: lightgreen;
		}
	</style>
</head>
<body>

<h2>All numbers from 0 to 100</h2>
<p>
<?php
for ($i = 0; $i <= 100; $i++) {
	echo $i;
	if ($i < 100) echo ', ';
}
?>
</p>

<h2>Divisible by 3, >40 and <80</h2>
<p>
<?php
for ($i = 41; $i < 80; $i++) {
	if ($i % 3 == 0) {
		echo $i . ' ';
	}
}
?>
</p>

<h2>Multiplication Table (1–10)</h2>
<table>
	<?php
	for ($row = 0; $row <= 10; $row++) {
		echo "<tr>";
		for ($col = 1; $col <= 10; $col++) {
			$product = $row * $col;
			$class = ($product % 2 === 0) ? 'even' : '';
			echo "<td class='$class'>$product</td>";
		}
		echo "</tr>";
	}
	?>
</table>

</body>
</html>
