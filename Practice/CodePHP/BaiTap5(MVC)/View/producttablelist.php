<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Manage</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>PRODUCT MANAGEMENT</h1>
        <button><a href="../Model/addproductform.php">Add Product</a></button>
        <button><a href="../index.php">Home</a></button>

        <table border="1px solid">
            <tr>
                <th>ID</th>
                <th>Ma san pham</th>
                <th>Ten san pham</th>
                <th>Anh</th>
                <th>Gia san pham</th>
                <th>Mo ta san pham</th>
            </tr>
            <?php
            include '../config.php';
            $connect = new connection();
            $rows = $connect->fetch2();
            $i = 1;
            if (!empty($rows)) {
              foreach ($rows as $row) {
            ?>
            <tbody>
            <tr>
                <td><?php echo $i++; ?></td>

                <td><?php echo $row['masp'] ?></td>

                <td><?php echo $row['tensp'] ?></td>

                <td><?php echo $row['anh'] ?></td>

                <td><?php echo $row['giasp'] ?></td>

                <td><?php echo $row['motasp'] ?></td>
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