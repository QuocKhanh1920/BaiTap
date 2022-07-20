<?php
class file {
    private $allow_file = ['image/png', 'image/jpg', 'image/jpeg', 'image/gif'];

    public function uploadFile($file) {
        if (is_array($file)) {
            if (in_array($file['type'], $this->allow_file)) {
                move_uploaded_file($file['tmp_name'], 'img/'.$file['name']);
            }
            else {
                die('File is not supported');
            }
        }
        else {
            die('No file was upload');
        }
    }
}
?>