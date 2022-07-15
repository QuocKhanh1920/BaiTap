<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

</head>

<body>
    <?php
    require_once("connection.php");
    ?>
    <div class="container">
        <div class="row">
            <h3> User Management </h3>
            <h4>Users Account List</h4>
            <a href="add.php">Add User Account</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $id = 1;
                    $sql = "SELECT * FROM users";

                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $id++ ?></th>
                            <td><?php echo $data["username"]; ?></td>
                            <td><?php echo $data["email"]; ?></td>
                            <td><?php echo $data["password"]; ?></td>
                            <td><a href="update.php? id=<?php echo $data["id"]; ?>">Update</a> | <a href="delete.php? id=<?php echo $data["id"]; ?>">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
    crossorigin="anonymous"></script>

</body>

</html>