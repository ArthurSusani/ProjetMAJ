<?php
	
	namespace Manager;

	class BookingManager extends \W\Manager\Manager
	{
		//fonction qui permet de creer une reservation d'une chambre
		public function create($id_user, $id_room, $begin, $end, $validate, $price)
		{
			if (!is_numeric($id_user) || !is_numeric($id_room) || empty($begin) || empty($end) || empty($validate) || empty($price)){
			return false;
		}
		$sql = 'INSERT INTO ' . $this->table . '( id_user, id_room, begin, end, validate, price ) VALUES(:id_user, :id_room, :begin, :end, :validate, :price)';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_user', $id_user);
		$sth->bindValue(':id_room', $id_room);
		$sth->bindValue(':begin', $begin);
		$sth->bindValue(':end', $end);
		$sth->bindValue(':validate', $validate);
		$sth->bindValue(':price', $price);

		$sth->execute();

		if(!empty($this->dbh->lastInsertId())){
			return $this->dbh->lastInsertId();
		}else{
			return false;
		}


		}
		//Julien: fonction qui retourne les infos d'un client  à partir de son Id client
		public function getClientInfoByClientId($id_user){
			//si l'id n'est pas un entier on retourne false et la fonction s'arrete
					if (!is_numeric($id_user)){
			return false;
			}
			//requete préparée
		$sql = 'SELECT * FROM logs WHERE id=:id';
		//echo $sql;
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id_user);
		$sth->execute();
		//un simple fetch et pas un fetchall car on récupère un seul tableau d'infos client
		return $sth->fetch(\PDO::FETCH_ASSOC);
		}
		//Julien: fonction qui retourne les infos de réservation d'un client à partir de son Id client
		public function getBookingInfoByClientId($id_user){
			//si l'id n'est pas un entier on retourne false et la fonction s'arrete
					if (!is_numeric($id_user)){
			return false;
			}
			//requete préparée
		$sql = 'SELECT * FROM booking WHERE id=:id';
		//echo $sql;
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id_user);
		$sth->execute();
		//un simple fetch et pas un fetchall car on récupère un seul tableau d'infos client
		return $sth->fetch(\PDO::FETCH_ASSOC);
		}

	}