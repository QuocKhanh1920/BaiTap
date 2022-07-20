<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Manage</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>CUSTOMER MANAGEMENT</h1>
        <button><a href="addcustomerform.php">Add Customer</a></button>

        <table border="1px solid">
            <tr>
                <th>ID</th>
                <th>Ten khach hang</th>
                <th>So DT</th>
                <th>Dia chi</th>
            </tr>
            <?php
            include 'config.php';
            $connect = new connection();
            $rows = $connect->fetch1();
            $i = 1;
            if (!empty($rows)) {
              foreach ($rows as $row) {
            ?>
            <tbody>
            <tr>
                <td><?php echo $i++; ?></td>

                <td><?php echo $row['tenkhachhang'] ?></td>

                <td><?php echo $row['sdt'] ?></td>

                <td><?php echo $row['diachi'] ?></td>
            </tr>
            </tbody>
            
            <?php
              }
    } else {
        echo "no data";
    }
    ?>
        </table>
    


</body>

</html>