<?php

class HomeController extends PageController {

	// Properties 
	private $latestProducts;



	// Constructor 

	public function __construct(){

		// Prepare the title 
			$this->title = 'MobileZone';
		// prepare the meta description 
			$this->metaDesc = 'See our wonderful latest Mobile and tablests';
		// Get the latest products 
	}

	public function buildHTML(){

		include 'app/templates/header.php';
		include 'app/templates/home.php';
		include 'app/templates/footer.php';
	}
}