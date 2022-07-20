<?php
class connection
{
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "quan_li_kho_van";
    private $conn;

    public function __construct()
    {
        try {

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "connection failed" . $e->getMessage();
        }
    }

    public function customerinsert()
    {

        if (isset($_POST['submit'])) {
            if (isset($_POST['tenkhachhang']) && isset($_POST['sdt']) && isset($_POST['diachi'])) {
                if (!empty($_POST['tenkhachhang']) && !empty($_POST['sdt']) && !empty($_POST['diachi'])) {

                    $tenkhachhang = $_POST['tenkhachhang'];

                    $sdt = $_POST['sdt'];

                    $diachi = $_POST['diachi'];

                    $query = "INSERT INTO khach_hang (tenkhachhang, sdt, diachi) VALUES ('$tenkhachhang','$sdt','$diachi')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Add new customer successfully');</script>";
                        echo "<script>window.location.href = '../View/customertablelist.php';</script>";
                    } else {
                        echo "<script>alert('Add new customer failed');</script>";
                        echo "<script>window.location.href = '../Model/addcustomerform.php';</script>";
                    }
                } else {
                    echo "<script>alert('Please enter full information');</script>";
                    echo "<script>window.location.href = '../Model/addcustomerform.php';</script>";
                }
            }
        }
    }

    public function productinsert()
    {

        if (isset($_POST['submit'])) {
            if (isset($_POST['masp']) && isset($_POST['tensp']) && isset($_POST['anh']) && isset($_POST['giasp']) && isset($_POST['motasp'])) {
                if (!empty($_POST['masp']) && !empty($_POST['tensp']) && !empty($_POST['anh']) && !empty($_POST['giasp']) && !empty($_POST['motasp'])) {

                    $masp = $_POST['masp'];

                    $tensp = $_POST['tensp'];

                    $anh = $_POST['anh'];

                    $giasp = $_POST['giasp'];

                    $motasp = $_POST['motasp'];

                    $query = "INSERT INTO san_pham (masp, tensp, anh, giasp, motasp) VALUES ('$masp','$tensp','$anh', '$giasp', '$motasp')";
                    if ($sql = $this->conn->query($query)) {
                        echo "<script>alert('Add new product successfully');</script>";
                        echo "<script>window.location.href = '../View/producttablelist.php';</script>";
                    } else {
                        echo "<script>alert('Add new product failed');</script>";
                        echo "<script>window.location.href = '../Model/addproductform.php';</script>";
                    }
                } else {
                    echo "<script>alert('Please enter full information');</script>";
                    echo "<script>window.location.href = '../Model/addproductform.php';</script>";
                }
            }
        }
    }

    public function fetch1()
    {
        $data = null;

        $query = "SELECT * FROM khach_hang";
        if ($sql =  $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetch2()
    {
        $data = null;

        $query = "SELECT * FROM san_pham";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }


}
