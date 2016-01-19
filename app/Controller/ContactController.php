<?php
	
namespace Controller;

class ContactController extends \W\Controller\Controller {
	public function config() {
		$contactManager = new \Manager\ContactManager();
	}

	/*public function insertcontact(){
		$sql = 'INSERT INTO contact(title,firstname,lastname,phone,mail,subject,message) VALUES (:title,:firstname,:lastname,:phone,:mail,:subject,:message)';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':title', $title);
		$sth->bindValue(':firstname', $firstname);
		$sth->bindValue(':lastname', $lastname);
		$sth->bindValue(':phone', $phone);
		$sth->bindValue(':mail', $mail);
		$sth->bindValue(':subject', $subject);
		$sth->bindValue(':message', $message);
		$sth->execute();
	}*/