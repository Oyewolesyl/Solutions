<!DOCTYPE html>
<html>
<head>
  <title>Day and Season Checker</title>
</head>
<body>

  <h2>Check Day of the Week</h2>
  <form method="post">
    <label for="dayNumber">Enter a number (1–7):</label>
    <input type="number" name="dayNumber" min="1" max="7" required>
    <br><br>

    <h2>Check Season by Month</h2>
    <label for="monthName">Enter a month:</label>
    <input type="text" name="monthName" required>
    <br><br>

    <input type="submit" value="Check">
  </form>

  <?php
    // DAY CHECK
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["dayNumber"])) {
        $dayNumber = $_POST["dayNumber"];
        echo "<h3>Day of the Week:</h3>";

        switch ($dayNumber) {
          case 1:
            echo "monday";
            break;
          case 2:
            echo "tuesday";
            break;
          case 3:
            echo "wednesday";
            break;
          case 4:
            echo "thursday";
            break;
          case 5:
            echo "friday";
            break;
          case 6:
            echo "saturday";
            break;
          case 7:
            echo "sunday";
            break;
          default:
            echo "Please enter a number between 1 and 7.";
        }
      }

      // SEASON CHECK
      if (isset($_POST["monthName"])) {
        $month = strtolower(trim($_POST["monthName"])); // normalize input
        echo "<h3>Season:</h3>";

        switch ($month) {
          case "december":
          case "january":
          case "february":
            echo "winter";
            break;
          case "march":
          case "april":
          case "may":
            echo "spring";
            break;
          case "june":
          case "july":
          case "august":
            echo "summer";
            break;
          case "september":
          case "october":
          case "november":
            echo "autumn";
            break;
          default:
            echo "This is not a month that I recognize.";
        }
      }
    }
  ?>

</body>
</html>
