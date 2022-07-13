<?php
session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
	header('Location: login.php');
}
?>
<html>

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<h1> WELCOME <?php echo $_SESSION['username'];  ?></h1>
	<button><a href="logout.php">Đăng Xuất</a></button>
</body>

</html>