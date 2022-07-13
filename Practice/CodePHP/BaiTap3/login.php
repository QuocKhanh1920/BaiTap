<?php
session_start();
?>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once("connection.php");

    if (isset($_POST["btn_submit"])) {

        $username = $_POST["username"];

        $email = $_POST["email"];

        $password = $_POST["password"];

        $username = strip_tags($username);
        $username = addslashes($username);

        $password = strip_tags($password);
        $password = addslashes($password);

        if ($username == "" || $email == "" || $password == "") {
            echo "Please enter full information";
        } else {
            $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password' ";

            $query = mysqli_query($conn, $sql);

            $num_rows = mysqli_num_rows($query);

            if ($num_rows == 0) {
                echo "Username or password not correct!!";
            } else {
                $_SESSION['username'] = $username;

                header('Location: index.php');
            }
        }
    }
    ?>
    <form method="POST" action="login.php">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" size="40"></td>
                </tr>

                <tr>
                    <td>Phone</td>
                    <td><input type="tel" name="phone" size="40"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" size="40"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" size="40"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input name="btn_submit" type="submit" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>