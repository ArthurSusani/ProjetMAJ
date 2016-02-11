<?php
	/*
		PHPMailer est une bibliothèque qui permet de gérer facilement
		l'envoi d'emails depuis un script PHP

	 */
function phpMailer()
{
	$mail = new PHPMailer();

	$mail->isSMTP();                                    	// On va se servir de SMTP
	$mail->Host = 'smtp.gmail.com';  						// Serveur SMTP
	$mail->SMTPAuth = true;                             	// Active l'autentification SMTP
	$mail->Username = 'testphpmailer.wf3@gmail.com';        // SMTP username
	$mail->Password = 'arthur54';                   		// SMTP password
	$mail->SMTPSecure = 'tls';                          	// TLS Mode
	$mail->Port = 587;                                  	// Port TCP à utiliser
	
	$mail->Sender='wf3.assistance@besthotel.fr';
	$mail->setFrom('bliksem-54@hotmail.fr', 'ServiceTech', false);
	$mail->addAddress('', '');     							// Ajouter un destinataire
	$mail->addAddress('');					               	// Le nom est optionnel
	$mail->addReplyTo('', '');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);                                  	 // Set email format to HTML

	$mail->Subject = 'Sujet de l\'email';
	$mail->Body    = 'Message au format html : <h1>Bonjour</h1>';
	$mail->AltBody = 'Le message en texte brut, pour les clients qui ont désactivé l\'affichage HTML';

	if(!$mail->send()) {
	    echo 'Le message n\'a pas pu être envoyé';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		$string ='Le message a été envoyé';
		$this->redirectToRoute('status_sender', ['string' => $string]);
	}
}