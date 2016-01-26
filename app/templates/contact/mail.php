<?php
	/*
		PHPMailer est une bibliothèque qui permet de gérer facilement
		l'envoi d'emails depuis un script PHP

	 */

	$mail = new PHPMailer();

	$mail->isSMTP();                                    	// On va se servir de SMTP
	$mail->Host = 'smtp.gmail.com';  						// Serveur SMTP
	$mail->SMTPAuth = true;                             	// Active l'autentification SMTP
	$mail->Username = 'accorddeon@gmail.com';           	// SMTP username
	$mail->Password = '***';                   				// SMTP password
	$mail->SMTPSecure = 'tls';                          	// TLS Mode
	$mail->Port = 587;                                  	// Port TCP à utiliser
	
	$mail->Sender='mailer@monsite.fr';
	$mail->setFrom('mailer@monsite.fr', 'Mon programme PHP', false);
	$mail->addAddress('mk@bwets.net', 'Joe User');     		// Ajouter un destinataire
	$mail->addAddress('ellen@example.com');               	// Le nom est optionnel
	$mail->addReplyTo('contact@monsite.fr', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');

	$mail->isHTML(true);                                  	 // Set email format to HTML

	$mail->Subject = 'Un sujet';
	$mail->Body    = 'Un texte HTML';
	$mail->AltBody = 'Un texte brut';

	if(!$mail->send()) {
	    echo 'Le message n\'a pas pu être envoyé';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Le message a été envoyé';
	}