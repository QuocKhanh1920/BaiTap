<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    require_once("connection.php");

    if (isset($_POST["form-submit"])) {
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

                header('location: login.php');
            }
        }
    }
    ?>
    <main>
        <div class="main">
            <form action="register.php" class="form" id="register-form" method="POST">
                <h3 class="heading">Register</h3>

                <div class="spacer"></div>

                <div class="form-group">
                    <label for="username" class="form-label">Username</label>

                    <input id="username" name="username" type="text" placeholder="Enter Username" class="form-control">

                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>

                    <input id="email" name="email" type="text" placeholder="Enter Email" class="form-control">

                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">Password</label>

                    <input id="password" name="password" type="password" placeholder="Enter Password" class="form-control">

                    <span class="form-message"></span>
                </div>

                <button class="form-submit" name="form-submit">Register</button>

                <p>Already have account? <a href="login.php">Login here</a> </p>
            </form>
        </div>
    </main>
</body>

</html>