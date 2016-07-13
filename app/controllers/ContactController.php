<?php

class ContactController extends PageController {

	// Properties 
	



	// Constructor 

	public function __construct(){

		// Prepare the title 
			$this->title = 'Contact Us';
		// prepare the meta description 
			$this->metaDesc = 'Contact Us for awesome service';
		// Get the latest products 
	}

	public function buildHTML(){

		include 'app/templates/header.php';
		include 'app/templates/contact.php';
		include 'app/templates/footer.php';
	}
}