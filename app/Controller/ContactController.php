<?php
	
	namespace Controller;

	class ContactController extends \W\Controller\Controller {
		
		public function contact()
		{
			if(isset($_POST['send'])){
				$contactManager = new \Manager\ContactManager();
				$contactManager->insertcontact($_POST['title'],$_POST['firstname'],$_POST['lastname'],$_POST['phone'],$_POST['mail'],$_POST['subject'],$_POST['message']);
			}
			$this->show("contact/contact");
		}

		public function whoarewe()
		{
			$this->show("contact/whoarewe");
		}
	}