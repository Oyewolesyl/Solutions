<?php
// Define variables for correct username and password
$username = 'shallipopi';
$password = 'elonmusk';
$message = ''; // Default message to avoid undefined variable error

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve the values entered by the user
    $user_input = $_POST['username'];
    $pass_input = $_POST['password'];

    // Check if the username and password match
    if ($user_input === $username && $pass_input === $password) {
        $message = 'Welcome';
    } else {
        $message = 'There was an error logging in, please try again';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: bold;
        }
        .input-wrapper {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="password"] {
            width: 93%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="index.php">
            <div class="input-wrapper">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-wrapper">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <input type="submit" name="submit" value="Login">
        </form>

        <!-- Display message after form submission -->
        <div class="message">
            <?php echo $message; ?>
        </div>
    </div>

</body>
</html>
