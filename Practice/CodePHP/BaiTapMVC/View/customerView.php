<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body class="text-center">
    <div class="container">
        <h1 class="text-primary">CUSTOMER INFO</h1>

        <div class="button text-center">
            <button type="button" class="btn btn-info">
                <a class="link-light text-decoration-none font-weight-bolder" 
                href="index.php?controller=addCustomerController">Add Customer</a>
            </button>

            <button type="button" class="btn btn-info">
                <a class="link-light text-decoration-none font-weight-bolder" href="#">Home</a>
            </button>
        </div>

        <br>

        <table class="table table-info">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $i = 1;                
                foreach ($customerList as $customers) {
                ?>
                    <tr>
                        <th><?php echo $i++ ?></th>
                        <td><?php echo $customers->fullName ?></td>
                        <td><?php echo $customers->phone ?></td>
                        <td><?php echo $customers->address ?></td>
                    </tr>
                <?php

                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

</body>

</html>