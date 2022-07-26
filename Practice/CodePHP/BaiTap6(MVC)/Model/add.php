<?php
require_once('../config.php');

class add extends connection
{
    public function customerInsert()
    {

        if (isset($_POST["submit"])) {
            $fullName = $_POST['fullName'];

            $phone = $_POST['phone'];

            $address = $_POST['address'];

            if ($fullName == "" || $phone == "" || $address == "") {
                echo '<script>alert("Please enter full information!!!")</script>';
                echo "<script>window.location.href = '../Model/AddCustomer.php';</script>";
            } else {
                $query = "SELECT * FROM customer WHERE phone = '$phone'";

                $kt = mysqli_query($this->conn, $query);

                if (mysqli_num_rows($kt)  > 0) {
                    echo '<script>alert("Number phone Existed!!!")</script>';
                    echo "<script>window.location.href = '../Model/AddCustomer.php';</script>";
                } else {
                    $query = "INSERT INTO customer (fullName, phone, address) VALUES ('$fullName','$phone','$address')";

                    $sql = mysqli_query($this->conn, $query);

                    echo "<script>alert('Add new customer successfully');</script>";
                    echo "<script>window.location.href = '../View/CustomerInfo.php';</script>";
                }
            }
        }
    }

    public function productInsert()
    {

        if (isset($_POST['submit'])) {
            $code = $_POST['code'];

            $name = $_POST['name'];

            $image = $_POST['image'];

            $price = $_POST['price'];

            $description = $_POST['description'];

            if ($code == "" || $name == "" || $image == "" || $price == "" || $description == "") {
                echo '<script>alert("Please enter full information!!!")</script>';
                echo "<script>window.location.href = '../Model/AddProduct.php';</script>";
            } else {
                $query = "SELECT * FROM product WHERE code = '$code'";

                $kt = mysqli_query($this->conn, $query);

                if (mysqli_num_rows($kt)  > 0) {
                    echo '<script>alert("Product code Existed!!!")</script>';
                    echo "<script>window.location.href = '../Model/AddProduct.php';</script>";
                } else {
                    $query = "INSERT INTO product (code, name, image, price, description) VALUES ('$code','$name','$image','$price','$description')";

                    $sql = mysqli_query($this->conn, $query);

                    echo "<script>alert('Add new product successfully');</script>";
                    echo "<script>window.location.href = '../View/ProductInfo.php';</script>";
                }
            }
        }
    }

    // public function fetch1()
    // {
    //     $data = null;

    //     $query = "SELECT * FROM customer";
    //     if ($sql =  $this->conn->query($query)) {
    //         while ($row = mysqli_fetch_assoc($sql)) {
    //             $data[] = $row;
    //         }
    //     }
    //     return $data;
    // }

    // public function fetch2()
    // {
    //     $data = null;

    //     $query = "SELECT * FROM product";
    //     if ($sql = $this->conn->query($query)) {
    //         while ($row = mysqli_fetch_assoc($sql)) {
    //             $data[] = $row;
    //         }
    //     }
    //     return $data;
    // }
}
