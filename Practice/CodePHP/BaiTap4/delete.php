<?php
require_once("connection.php");

if (isset($_GET["id"])) {
	
	$id = $_GET["id"];
	
	$sql = "DELETE FROM users WHERE id = $id";
	$query = mysqli_query($conn, $sql);

    echo '<script>alert("Delete Successfully!")</script>';
	
	header('location: manager.php');
}

?>