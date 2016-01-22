<?php
	
	namespace Manager;

	class ContactManager extends \W\Manager\Manager
	{
		public function insertcontact($title,$firstname,$lastname,$phone,$mail,$subject,$message)
		{
			if(empty($title) || empty($firstname) || empty($lastname) || empty($phone) || empty($mail) || empty($subject) || empty($message)){
				return false;
			}

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
		}

		public function viewcomplain(){
			$sql = 'SELECT * FROM contact';
			$sth = $this->dbh->prepare($sql);
			$sth->execute();

			$result = $sth->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
		}
	}