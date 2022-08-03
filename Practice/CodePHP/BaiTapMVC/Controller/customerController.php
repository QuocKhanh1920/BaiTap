<?php

class customerController {
	
	protected $model;
	
	protected $customerList;

	public function __construct(){
		$this->model = new customerModel();
		
		$customerList = $this->model->fetch('SELECT * FROM customer');

		include "View/customerView.php";
	}
}

new customerController();