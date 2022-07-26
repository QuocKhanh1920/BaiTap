<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="../css/form.css">
</head>

<body>
    <?php

    include '../Model/add.php';

    include '../Controller/controller.php';

    $controller = new controller();

    $insert = $controller->customerInsert();

    ?>

    <div class="main">
        <form action="" class="form" id="form-1" method="POST">
            <h3 class="heading">Add Customer</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullName" class="form-label">Full Name</label>

                <input id="fullName" name="fullName" type="text" class="form-control">

            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Phone</label>

                <input id="phone" name="phone" type="tel" class="form-control">

            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address</label>

                <input id="address" name="address" type="text" class="form-control">
            </div>


            <button class="form-submit" name="submit">Add</button>
        </form>
    </div>

</body>

</html>