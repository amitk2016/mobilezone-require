<?php

class RegisterController extends PageController {

	// Properties 
	



	// Constructor 

	public function __construct(){

		// Prepare the title 
			$this->title = 'Register Page';
		// prepare the meta description 
			$this->metaDesc = 'Register here to be a member';
		// Get the latest products 
	}

	public function buildHTML(){

		include 'app/templates/header.php';
		include 'app/templates/register.php';
		include 'app/templates/footer.php';
	}
}