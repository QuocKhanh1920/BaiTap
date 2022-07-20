<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <?php

    include '../config.php';

    include '../Model/file.php';
    
    $connect = new connection();
    
    $insert = $connect->productinsert();

    ?>

    <div class="main">
        <form action="" class="form" id="form-1" method="POST">
            <h3 class="heading">Add Product</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="code" class="form-label">Ma san pham</label>

                <input id="code" name="masp" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Ten san pham</label>

                <input id="" name="tensp" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="file" class="form-label">Anh</label>

                <input id="file" name="anh" type="file" class="form-control">
            </div>

            <div class="form-group">
                <label for="price" class="form-label">Gia san pham</label>

                <input id="rice" name="giasp" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Mo ta san pham</label>

                <input id="description" name="motasp" type="text" class="form-control">
            </div>


            <button class="form-submit" name="submit">Add</button>
        </form>
    </div>

</body>

</html>