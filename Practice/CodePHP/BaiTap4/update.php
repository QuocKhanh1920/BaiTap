<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Account</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            require_once("connection.php");

            if (isset($_POST["Update"])) {
                $id = $_POST["id"];

                $username = $_POST["username"];

                $email = $_POST["email"];

                $password = $_POST["password"];

                $password = md5($password);

                $sql = "UPDATE users SET username = '$username', email = '$email', password = '$password' where id = $id";
                mysqli_query($conn, $sql);

                header('location: manager.php');
            }

            $id = "";

            $username = "";
            
            $email = "";
            
            $password = "";
            
            if (isset($_GET["id"])) {
                $id = $_GET["id"];
                
                $sql = "SELECT * FROM users WHERE id = $id";
                
                $query = mysqli_query($conn, $sql);
                
                while ($data = mysqli_fetch_array($query)) {
                    $username = $data["username"];
                    
                    $email = $data["email"];
                    
                    $password = $data["password"];
                }
            }
            ?>

            <h3> Update User Account </h3>

            <form method="POST" name="update-form">
                <table class="table">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <tr>
                        <td>Username </td>
                        <td><input type="text" name="username" value="<?php echo $username; ?>" /></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td><input type="email" name="email" value="<?php echo $email; ?>" /></td>
                    </tr>

                    <tr>
                        <td>Password </td>
                        <td><input type="password" name="password" value="<?php echo $password; ?>" /></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="Update" value="Update"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>