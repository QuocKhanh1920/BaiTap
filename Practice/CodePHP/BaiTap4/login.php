<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php

    require_once("connection.php");

    if (isset($_POST["form-submit"])) {

        $username = $_POST["username"];

        $password = $_POST["password"];

        $username = strip_tags($username);
        $username = addslashes($username);

        $password = strip_tags($password);
        $password = addslashes($password);

        if ($username == "" || $password == "") {
            echo '<script>alert("Please enter full information!!!")</script>';
        } else {
            $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";

            $query = mysqli_query($conn, $sql);

            $num_rows = mysqli_num_rows($query);

            if ($num_rows == 0) {
                echo '<script>alert("Invalid User or Password!!!")</>';
            } else {
                $_SESSION['username'] = $username;

                header('location: index.php');
            }
        }
    }
    ?>
    <main>
        <div class="main">
            <form action="login.php" class="form" id="login-form" method="POST">
                <h3 class="heading">User Login</h3>

                <div class="spacer"></div>

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>

                    <input id="username" name="username" type="text" placeholder="Enter Username" class="form-control">

                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>

                    <input id="password" name="password" type="password" placeholder="Enter Password" class="form-control">

                    <span class="form-message"></span>
                </div>

                <button class="form-submit" name="form-submit">Login</button>

                <p>Don't have an account? <a href="login.php">Register here</a></p>
            </form>
        </div>
    </main>
</body>

</html>