<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email and password are set
    if (isset($_POST['email']) && isset($_POST['password'])) {
        header("Location: /hostel_management/index.php");
        exit();
    } else {
        echo "Please provide email and password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        html, body {
            background-color:#54DEFD;
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
        form {
            width: 300px;
            border: 1px solid white;
            padding: 20px;
            border-radius: 5px;
            box-sizing: border-box;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-top: 10px;
            box-sizing: border-box;
            background-color:#0096c7;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form action="login.php" method="post">
        <h2 style="color:white;">Login</h2>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">

        <p style="color:white;">Don't have an account? <a href="register.php">Register here</a>.</p>
    </form>
</body>
</html>
