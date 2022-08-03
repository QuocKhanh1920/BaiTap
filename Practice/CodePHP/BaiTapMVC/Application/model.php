<?php

class model {
    public function fetch($sql){
        //khai bao bien ket noi, la bien toan cuc
        global $con;

        $result = mysqli_query($con,$sql);
        //duyet cac ban ghi
        $arr = array();
        
        while($rows = mysqli_fetch_object($result))
            $arr[] = $rows;
        return $arr;
    }

    //duyet mot ban ghi
    public function fetch_one($sql){
        global $con;

        $result = mysqli_query($con,$sql);
        //duyet ban ghi dau tien, tra ket qua ve bien rows
        $rows = mysqli_fetch_object($result);

        return $rows;
    }

    public function execute($sql){
        global $con;
        
        mysqli_query($con,$sql);
    }

    public function count($sql){
        global $con;
        
        
        $result = mysqli_query($con,$sql);
        
        //tra ve tong so ban ghi
        
        return mysqli_num_rows($result);
    }

    public function get_insert_id($id_name,$tbl_name){
        global $con;
        
        $result = mysqli_query($con,"SELECT $id_name FROM $tbl_name ORDER BY $id_name DESC LIMIT 0,1");
        
        $rows = mysqli_fetch_object($result);
        
        return $rows;
    }
}
