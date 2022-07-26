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

    include '../Model/add.php';

    include '../Model/file.php';

    include '../Controller/controller.php';

    $controller = new controller();

    $insert = $controller->productInsert();

    ?>

    <div class="main">
        <form action="" class="form" id="form-1" method="POST">
            <h3 class="heading">Add Product</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="code" class="form-label">Product Code</label>

                <input id="code" name="code" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name" class="form-label">Product Name</label>

                <input id="" name="name" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="file" class="form-label">Image</label>

                <input id="file" name="image" type="file" class="form-control">
            </div>

            <div class="form-group">
                <label for="price" class="form-label">Product Price</label>

                <input id="rice" name="price" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>

                <input id="description" name="description" type="text" class="form-control">
            </div>


            <button class="form-submit" name="submit">Add</button>
        </form>
    </div>

</body>

</html>