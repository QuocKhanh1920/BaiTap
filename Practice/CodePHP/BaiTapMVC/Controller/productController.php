<?php

class productController {
	
	protected $model;
	
	protected $productList;

	public function __construct(){
		$this->model = new customerModel();
		
		$productList = $this->model->fetch('SELECT * FROM product');

		include "View/productView.php";
	}

}

new productController();