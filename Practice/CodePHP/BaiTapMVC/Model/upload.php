<?php
$fileUpload = new file();

if (isset($_FILES['file'])) {
    $fileUpload->uploadFile($_FILES['file']);
}
else {
    die('File was not submitted');
}
