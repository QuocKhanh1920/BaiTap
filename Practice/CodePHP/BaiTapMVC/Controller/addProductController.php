<?php
class addProductController
{
    protected $product;

    public function __construct()
    {
        $this->product = new productModel();

        if (isset($_POST["submit"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $code = $_POST['code'];

                $name = $_POST['name'];

                $image = $_POST['image'];

                $price = $_POST['price'];

                $description = $_POST['description'];

                if ($code == "" || $name == "" || $image == "" || $price == "" || $description == "") {
                    echo '<script>alert("Please enter full information!!!")</script>';
                    
                    echo "<script>window.location.href = 'index.php?controller=addProductController';</script>";
                } else {
                    $this->product->execute("INSERT INTO product (code, name, image, price, description) VALUES ('$code','$name','$image','$price','$description')");

                    $this->product->setCode($code);

                    $this->product->setName($name);

                    $this->product->setImage($image);

                    $this->product->setPrice($price);

                    $this->product->setDescription($description);

                    echo "<script>alert('Add new product successfully');</script>";

                    echo "<script>window.location.href = 'index.php?controller=productController';</script>";
                }
            }
        }
        include "View/addProductView.php";
    }
}
new addProductController();
