<?php
class addCustomerController
{
    protected $customer;

    public function __construct()
    {
        $this->customer = new customerModel();

        if (isset($_POST["submit"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fullName = $_POST["fullName"];

                $phone = $_POST["phone"];

                $address = $_POST["address"];

                if ($fullName == "" || $phone == "" || $address == "") {
                    echo '<script>alert("Please enter full information!!!")</script>';
                    echo "<script>window.location.href = 'index.php?controller=addCustomerController';</script>";
                } else {
                    $this->customer->execute("INSERT INTO customer(fullName, phone, address) VALUES('$fullName', '$phone', '$address')");

                    $this->customer->setFullName($fullName);

                    $this->customer->setPhone($phone);

                    $this->customer->setAddress($address);

                    echo "<script>alert('Add new customer successfully');</script>";

                    echo "<script>window.location.href = 'index.php?controller=customerController';</script>";
                }
            }
        }
        include "View/addCustomerView.php";
    }
}
new addCustomerController();
