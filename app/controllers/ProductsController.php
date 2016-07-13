<?php

class ProductsController extends PageController {

	private $allProducts;

	public function __construct(){

		//Prepare the title 
		$this->title = 'Our Product Range';

		// Prepare the meta description 

		$this->metaDesc = "Check out our latest smartphones ";
	}

	public function buildHTML(){

		include 'app/templates/header.php';
		include 'app/templates/product.php';
		include 'app/templates/footer.php';
	}
}