<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Info</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
    crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>PRODUCT INFO</h1>
        <div class="button">
            <button type="button" class="btn btn-info"><a class="link-light" href="../View/AddProduct.php">Add Product</a></button>

            <button type="button" class="btn btn-info"><a class="link-light" href="../index.php">Home</a></button>
        </div>


        <table class="table table-info">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include '../config.php';

                include '../Model/add.php';

                include '../Controller/controller.php';

                $controller = new controller();

                $rows = $controller->fetch2();
                $i = 1;
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $i++; ?></th>

                            <td><?php echo $row['code'] ?></td>

                            <td><?php echo $row['name'] ?></td>

                            <td><?php echo $row['image'] ?></td>

                            <td><?php echo $row['price'] ?></td>

                            <td><?php echo $row['description'] ?></td>
                        </tr>
                <?php
                    }
                } else {
                    echo "no data";
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" 
    crossorigin="anonymous"></script>
    
</body>

</html>