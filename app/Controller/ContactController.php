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

		public function viewcontact()
		{
			$views = new \Manager\ContactManager();
			$viewall = $views->viewcomplain();
			$this->show('contact/viewcontact',['viewall'=>$viewall]);
		}

		public function details($id)
		{
			$details = new \Manager\ContactManager();
			$viewall = $details->findByListId($id);
			$this->show("contact/details", ['viewall'=>$viewall]);
		}

		public function whoarewe()
		{
			$this->show("contact/whoarewe");
		}

		public function PHPMailer()
		{
			if(isset($_POST['mail'])){
				$mail = $this->inputMailSanitize($_POST['mail']);
				if(isset($_POST['lastname'])){
					$lastname = $this->inputStringSanitize($_POST['lastname']);
					if(isset($_POST['firstname'])){
						$firstname = $this->inputStringSanitize($_POST['firstname']);
						$name = $lastname." ".$firstname;
						if(isset($_POST['subject'])){
							$subject = $this->inputStringSanitize($_POST['subject']);
							if(isset($_POST['message'])){
								$message = $this->inputStringSanitize($_POST['message']);

								$mail = new \PHPMailer();
								$mail->isSMTP();                                    	// On va se servir de SMTP
								$mail->Host = 'smtp.gmail.com';  						// Serveur SMTP
								$mail->SMTPAuth = true;                             	// Active l'autentification SMTP
								$mail->Username = 'testphpmailer.wf3@gmail.com';        // SMTP username
								$mail->Password = 'Arthur123';                   		// SMTP password
								$mail->SMTPSecure = 'tls';                          	// TLS Mode
								$mail->Port = 587;  									// Port TCP à utiliser                            	
								//$mail->SMTPDebug  = 2;
								$mail->Sender='testphpmailer.wf3@gmail.com';
								$mail->setFrom('testphpmailer.wf3@gmail.com', 'pbClientWF3', false);
								$mail->addAddress( 'testphpmailer.wf3@gmail.com' , $name);// Ajouter un destinataire
								$mail->addAddress('');					               	// Le nom est optionnel
								$mail->addReplyTo('', '');
								$mail->addCC('');
								$mail->addBCC('');

								$mail->isHTML(true);                                  	 // Set email format to HTML

								$mail->Subject = $subject;
								$mail->Body    = '<p>Message de client : '. $message .'</p>';
								$mail->AltBody = 'Le message en texte brut, pour les clients qui ont désactivé l\'affichage HTML';

								if(!$mail->send()) {
								    $string = 'Le message n\'a pas pu être envoyé.<br>';
								    $string .= 'Mailer Error: ' . $mail->ErrorInfo;
								    
								    $this->show('status/sender', ['string' => $string, 'link'=> 'contact_contact', 'nb'=> 3]);
								}else{
									$contactManager = new \Manager\ContactManager();
									$contactManager->insertcontact($_POST['title'],$_POST['firstname'],$_POST['lastname'],$_POST['phone'],$_POST['mail'],$_POST['subject'],$_POST['message']);
									 
									$string = "Votre message a bien été enregistré, notre équipe y repondra dans les plus brèves delai. Merci.";
									$this->show('status/sender', ['string' => $string, 'link'=> 'home', 'nb'=> 4]);
								}
								

							}else{
								$this->show("contact/contact");
							}
						}
					}
				}
			}
		}

		//Methode de traitement des texte entré
		public function inputStringSanitize($string)
		{
			$string = strval (filter_var( $string, FILTER_SANITIZE_SPECIAL_CHARS));
			$string = filter_var( $string, FILTER_SANITIZE_STRING);
			return $string;
		}
		//Methode de traitement des adresses email
		public function inputMailSanitize($string)
		{
			$this->inputStringSanitize($string);
			$string = filter_var($string ,FILTER_SANITIZE_EMAIL);
			return $string;
		}
	}