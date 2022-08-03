<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-primary text-center">ADD PRODUCT</h1>

        <br>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label font-weight-bolder">Product Code</label>
                <input class="form-control" type="text" name="code" placeholder="Enter Product Code" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="" class="form-label font-weight-bolder">Product Name</label>
                <input class="form-control" type="tel" name="name" placeholder="Enter Product Name" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="" class="form-label font-weight-bolder">Image</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>

            <div class="mb-3">
                <label for="" class="form-label font-weight-bolder">Price</label>
                <input class="form-control" type="text" name="price" placeholder="Enter Price" aria-label="default input example">
            </div>

            <div class="mb-3">
                <label for="" class="form-label font-weight-bolder">Description</label>
                <input class="form-control" type="text" name="description" placeholder="Enter Description" aria-label="default input example">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>