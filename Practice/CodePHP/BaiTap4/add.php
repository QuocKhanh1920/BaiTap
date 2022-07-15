<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Account</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            require_once("connection.php");

            if (isset($_POST["Add"])) {
                $username = $_POST["username"];

                $email = $_POST["email"];

                $password = $_POST["password"];

                $password = md5($password);

                if ($username == "" || $email == "" || $password == "") {
                    echo '<script>alert("Please enter full information!!!")</script>';
                } else {
                    $sql = "SELECT * FROM users WHERE username = '$username'or email = '$email'";

                    $kt = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($kt)  > 0) {
                        echo '<script>alert("User Existed!!!")</script>';
                    } else {
                        $sql = "INSERT INTO users(username, email, password) 
                        VALUES ('$username','$email','$password')";

                        mysqli_query($conn, $sql);

                        header('location: manager.php');
                    }
                }
            }
            ?>

            <h3> Add User Account </h3>

            <form method="POST" name="update-form">
                <table class="table">
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="username"></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td><input type="email" name="email"></td>
                    </tr>

                    <tr>
                        <td>Password </td>
                        <td><input type="password" name="password"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="Add" value="Add"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous">
    </script>

</body>

</html>