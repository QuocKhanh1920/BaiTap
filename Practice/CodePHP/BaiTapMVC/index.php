<?php
include "config.php";

include "Application/model.php";

include "Model/customerModel.php";

include "Model/productModel.php";

include "Model/file.php";

$controller=isset($_GET["controller"])?"Controller/".$_GET["controller"].".php":"Controller/controller_main.php";

include $controller;

?>