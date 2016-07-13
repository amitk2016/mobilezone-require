<?php

class LoginController extends PageController {

	// Properties 
	



	// Constructor 

	public function __construct(){

		// Prepare the title 
			$this->title = 'Login Page';
		// prepare the meta description 
			$this->metaDesc = 'Be a Member';
		// Get the latest products 
	}

	public function buildHTML(){

		include 'app/templates/header.php';
		include 'app/templates/login.php';
		include 'app/templates/footer.php';
	}
}