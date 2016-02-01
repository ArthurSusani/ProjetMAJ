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
		$sql = 'SELECT * FROM bookings WHERE id_user=:id';
		//echo $sql;
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id_user);
		$sth->execute();
		return $sth->fetch(\PDO::FETCH_ASSOC);
	}

		//fonction qui retourne le prix d'une chambre par son id
	public function getRoomPriceByRoomId($id_room){
		if (!is_numeric($id_room)){
			return false;
		}
		$sql = 'SELECT price FROM rooms WHERE id=:id_room';
		//echo $sql;
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_room', $id_room);
		$sth->execute();
		//un simple fetch et pas un fetchall car on récupère un seul tableau d'infos client
		return $sth->fetch(\PDO::FETCH_ASSOC);			
	}


	public function getNumberOfRooms(){
		$sql= 'SELECT COUNT(*) FROM rooms';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		$info=$sth->fetch(\PDO::FETCH_ASSOC);
		return $info["COUNT(*)"];		
	}

	//retourne un tableau associatif avec tous les id des rooms
	public function getAllRoomsId(){
		$sql= 'SELECT id FROM rooms';
		$sth = $this->dbh->prepare($sql);
		$sth->execute();
		$info=$sth->fetchall(\PDO::FETCH_ASSOC);
		return $info;	
	}	

		//renvoi true si la chambre avec l'id an paramètre est réservée durant tel interval de date
		//et false si elle n'est pas réservée durant cet interval

	public function isRoomBooked($id_room,$date_start,$date_end)
	{
		if (!is_numeric($id_room))
		{
				//si l'id n'est pas correct...
			return false;
		}
		$sql= 'SELECT COUNT(*) FROM roombooking WHERE id_room=:id_room AND NOT ((end <= :start) OR (start >= :end))';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_room', $id_room);
		$sth->bindValue(':start', $date_start);
		$sth->bindValue(':end', $date_end);

		$sth->execute();
		$info=$sth->fetch(\PDO::FETCH_ASSOC);
		if($info["COUNT(*)"]==0)
		{
			return false;
		}
		else
		{
			return true;
		}				
	}


		//fonction qui renvoit un tableau avec les id de toutes les chambres déja réservées durant l'interval passé en paramètre
		//elle prend en paramètre la date de début et de fin du séjour
	public function getAllBookedRooms($date_start,$date_end)
	{
		$tab_booked_room=array();
		$nb_room=$this->getNumberOfRooms();
		$tab_room_id=$this->getAllRoomsId();
		//var_dump($tab_room_id);
		for ($i=0; $i < $nb_room; $i++) 
		{
			//si la chambre est réservée alors on stoque son id dans le tableau tab_booked_room
			if($this->isRoomBooked($tab_room_id[$i]['id'])===true){
				array_push($tab_booked_room,$tab_room_id[$i]['id']);
			}
		}
		return $tab_booked_room;
	}

	//fonction qui formate les chambres déja prise et qui retourne une chaine à partir d'un tableau ex: "1-3-9"
	public function bookedRoomsArrayIntoString($tab_booked_room)
	{
		$count=count($tab_booked_room);
		var_dump($tab_booked_room);
		$str="";
		for ($i=0; $i <$count ; $i++) { 
			$str.=$tab_booked_room[$i];
			if($i<$count-1){
				$str.='-';
			}			
		}
		var_dump("tabl format:",$str);
		return ($str);

	}


	//fonction qui retourne le nombre de chambres réservées
	public function getNumberBookedRooms()
	{

		return count($this->getAllBookedRooms());

	}

	//affiche l'occupation globale des chambres ex: 4 chambres occupée sur 10 disponible
	public function getBookedStats()
	{

	}	

	//fonction de debug pour afficher toutes les chambres réservée
	public function displayBookedRooms()
	{
		$nb_room=$this->getNumberOfRooms();
		$tab_room_id=$this->getAllRoomsId();
		for ($i=0; $i < $nb_room; $i++) 
		{
			//si la chambre est réservée alors on stoque son id dans le tableau tab_booked_room
			if($this->isRoomBooked($tab_room_id[$i]['id'])===true){
				echo '<br>room id'.$tab_room_id[$i]['id'].': booked!<br>';
			}
			else{
				echo '<br>room id' .$tab_room_id[$i]['id'] .': not booked<br>';
			}
		}
	}

	public function get(body);