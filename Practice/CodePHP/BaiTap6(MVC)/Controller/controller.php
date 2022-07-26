<?php

require_once '../config.php';

class controller extends add {
    public function fetch1()
    {
        $data = null;

        $query = "SELECT * FROM customer";
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

        $query = "SELECT * FROM product";
        if ($sql = $this->conn->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
?>