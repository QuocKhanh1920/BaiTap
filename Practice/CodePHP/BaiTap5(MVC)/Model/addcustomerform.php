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

    include '../config.php';
    $connect = new connection();
    $insert = $connect->customerinsert();

    ?>

    <div class="main">
        <form action="" class="form" id="form-1" method="POST">
            <h3 class="heading">Add Customer</h3>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Ten khach hang</label>

                <input id="fullname" name="tenkhachhang" type="text" class="form-control">

            </div>

            <div class="form-group">
                <label for="tel" class="form-label">So dien thoai</label>

                <input id="tel" name="sdt" type="tel" class="form-control">

            </div>

            <div class="form-group">
                <label for="address" class="form-label">Dia chi</label>

                <input id="address" name="diachi" type="text" class="form-control">
            </div>


            <button class="form-submit" name="submit">Add</button>
        </form>
    </div>

</body>

</html>