<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    require_once("connection.php");

    if (isset($_POST["form-submit"])) {
        $username = $_POST["username"];

        $password = $_POST["password"];

        $npw = $_POST["npw"];
        $npw = md5($npw);

        $cpw = $_POST["cpw"];
        $cpw = md5($cpw);

        if ($username == "" || $password == "") {
            echo '<script>alert("Please enter full information!!!")<script>';
        } else {

            $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";

            $query = mysqli_query($conn, $sql);

            $num = mysqli_fetch_array($query);

            if ($num > 0) {
                $upd = "UPDATE users SET password = '$npw' WHERE username = '$username'";

                $up = mysqli_query($conn, $upd);

                echo '<script>alert("Change Password Successfully")<script>';

                header('location: login.php');
            } else {
                echo '<script>alert("Password does not match")<script>';

                header('location: myaccount.php');
            }
        }
    }
    ?>

    <main>
        <div class="main">
            <form action="myaccount.php" class="form" id="myaccount-form" method="POST">
                <h3 class="heading">Change Password</h3>

                <div class="spacer"></div>

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>

                    <input id="username" name="username" type="text" placeholder="Enter Username" class="form-control">

                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Old Password</label>

                    <input id="password" name="password" type="password" placeholder="Enter Old Password" class="form-control">

                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">New Password</label>

                    <input id="npw" name="npw" type="password" placeholder="Enter New Password" class="form-control">

                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Confirm New Password</label>

                    <input id="cpw" name="cpw" type="password" placeholder="Enter New Password" class="form-control">

                    <span class="form-message"></span>
                </div>

                <button class="form-submit" name="form-submit">Change</button>
            </form>
        </div>
    </main>
</body>