<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    header('location: login.php');
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header">
        <h1>HOME</h1>

        <h2>WELCOME <?php echo $_SESSION['username']; ?></h2>
    </div>


    <div class="navbar">
        <a href="myaccount.php">MY ACCOUNT</a>

        <a href="logout.php">LOGOUT</a>

        <a href="manager.php">MANAGEMENT</a>

    </div>
</body>

</html>