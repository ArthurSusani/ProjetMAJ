<?php

namespace Manager;

class BookingManager extends \W\Manager\Manager
{
		//fonction qui permet de creer une reservation d'une ou plusieurs chambres et retourne le booking id
	public function create($id_user, $begin, $end, $validate, $price,$tab_rooms)
	{
		if (!is_numeric($id_user)  || empty($begin) || empty($end) || empty($validate) || empty($price)){
			return false;
		}
		$sql = 'INSERT INTO ' . $this->table . '( id_user, begin, end, validate, price ) VALUES(:id_user,  :begin, :end, :validate, :price)';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_user', $id_user);
		$sth->bindValue(':begin', $begin);
		$sth->bindValue(':end', $end);
		$sth->bindValue(':validate', $validate);
		$sth->bindValue(':price', $price);
		$sth->execute();
		$lastInsertId=$this->dbh->lastInsertId();
		$id_booking=$lastInsertId;

		$nb_room=count($tab_rooms);

		//die('ici');
		
		for ($i=0; $i <$nb_room ; $i++) { 
			$sql = 'INSERT INTO  roombooking  ( id_booking,id_room ) VALUES(:id_booking,:id_room)';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':id_booking', $id_booking);
			$sth->bindValue(':id_room', $tab_rooms[$i]);
			$sth->execute();
		}
		//insertion dans la base intermédiaire roombooking selon le nombre de room bookées
		if(!empty($lastInsertId)){
			return $id_booking;
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

		//Julien: fonction qui retourne les infos de réservation d'un client à partir de son Id client et son id booking
	public function getBookingInfoByBookingId($id_booking){
			//si l'id n'est pas un entier on retourne false et la fonction s'arrete
		if (!is_numeric($id_booking)){
			return false;
		}
			//requete préparée
		$sql = 'SELECT * FROM roombooking,bookings WHERE roombooking.id_booking=bookings.id_booking AND bookings.id_booking=:id_booking';
		//echo $sql;
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_booking', $id_booking);	
		$sth->execute();
		return $sth->fetch(\PDO::FETCH_ASSOC);
	}

	public function getBookingInfoByClientId($id_user){
			//si l'id n'est pas un entier on retourne false et la fonction s'arrete
		if (!is_numeric($id_user)){
			return false;
		}
			//requete préparée
		//$sql = 'SELECT * FROM bookings WHERE id_user=:id';
		//si je veux supprimer les booking en double, il faut rajouter a la fin de la requete GROUP BY bookings.id_booking mais du coup on ne voit plus toutes les chambres
		$sql = 'SELECT  * FROM roombooking,bookings WHERE roombooking.id_booking=bookings.id_booking AND id_user=:id ';
		//echo $sql;
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id_user);
		$sth->execute();
		return $sth->fetchAll(\PDO::FETCH_ASSOC);
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
	//fonction qui retourne le prix total avec en arg un tableau de rooms et le nombre de nuité (jours)
	public function getTotalPriceByRooms($tab_rooms,$nb_jour){
		//var_dump($tab_rooms);
		$total_price=0;//init a zéro euro
		if((count($tab_rooms))<>0){
			forEach($tab_rooms as $room=>$room_id){
				$room_price_fetch=$this->getRoomPriceByRoomId($room_id);
				$room_price=floatval($room_price_fetch['price']);
				$total_price+=$room_price;
			}
			return $total_price * $nb_jour;
		}
	return false;//si tableau vide

}

	//retourne le nombre chambre présente dans la table rooms
public function getNumberOfRooms(){
	$sql= 'SELECT COUNT(*) FROM rooms';
	$sth = $this->dbh->prepare($sql);
	$sth->execute();
	$info=$sth->fetch(\PDO::FETCH_ASSOC);
	$nbroom=$info["COUNT(*)"];
	return $nbroom;		
}

	//methode ajax de test qui envoi le nombre de chambres
public function sendAjaxInfo(){
	$sql= 'SELECT COUNT(*) FROM rooms';
	$sth = $this->dbh->prepare($sql);
	$sth->execute();
	$info=$sth->fetch(\PDO::FETCH_ASSOC);
	$nbroom=$info["COUNT(*)"];
	echo 'room number: '.$nbroom;
/*		header('Content-Type: application/json');
echo json_encode($nbroom);*/
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

	$sql= 'SELECT COUNT(*) FROM roombooking,bookings WHERE id_room=:id_room AND  ((bookings.begin >= :start) AND (bookings.end <= :end ))';
	
		/*$sql= 'SELECT * FROM roombooking,bookings WHERE id_room=:id_room 
		AND  ( (bookings.begin BETWEEN :start AND :end) OR (bookings.end BETWEEN :start AND :end) )';*/
		
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




	//retourne tous les enregistrments SQL avec juste la colonne id_room des bookings inscrits dans le laps de temps affiché  (entre datepicker debut et fin) s'il y en a
	public function getAllBookedRooms($datepick_start,$datepick_end){

		//$sql='SELECT * FROM bookings WHERE ((bookings.begin >= :datepick_start) AND (bookings.end <= :datepick_end))';
		//$sql1_papa_ok='SELECT * FROM bookings WHERE ((bookings.begin <=:datepick_end) AND (bookings.end >= :datepick_start))';
		$sql1='SELECT DISTINCT id_room FROM bookings,roombooking WHERE bookings.id_booking=roombooking.id_booking AND ((bookings.begin <=:datepick_end) AND (bookings.end >= :datepick_start))';
		$sth = $this->dbh->prepare($sql1);
		$sth->bindValue(':datepick_start', $datepick_start);
		$sth->bindValue(':datepick_end', $datepick_end);
		$sth->execute();
		$bookings_date_match=$sth->fetchall(\PDO::FETCH_ASSOC);
		//var_dump($bookings_date_match);
		if(count($bookings_date_match))
		{
			return $bookings_date_match;
		}
		else
		{
			return false;//retourne false si aucun booking trouvé dans le laps de temps
		}
	}

	//coté "serveur" ajax qui envoit les chambres réservée en mode texte brut
	public function SendAjaxAllBookedRooms($datepick_start,$datepick_end){
		$sql1='SELECT DISTINCT id_room FROM bookings,roombooking WHERE bookings.id_booking=roombooking.id_booking AND ((bookings.begin <=:datepick_end) AND (bookings.end >= :datepick_start))';
		$sth = $this->dbh->prepare($sql1);
		$sth->bindValue(':datepick_start', $datepick_start);
		$sth->bindValue(':datepick_end', $datepick_end);
		$sth->execute();
		$bookings_date_match=$sth->fetchall(\PDO::FETCH_ASSOC);
		//print_r($bookings_date_match);
		//var_dump($bookings_date_match);
		$str_bookings_date_match=$this->bookedRoomsArrayIntoString($bookings_date_match);
		echo $str_bookings_date_match;
		//echo ['0']['id_room'];
	}

	//fonction qui formate les chambres déja prises et qui retourne une chaine à partir d'un tableau ex: "1-3-9"
	public function bookedRoomsArrayIntoString($tab_booked_room)
	{
		$count=count($tab_booked_room);
		if($count>0)
		{
		//var_dump($tab_booked_room);
			$str="";
			for ($i=0; $i <$count ; $i++) { 
				$str.=$tab_booked_room[$i]['id_room'];
				if($i<$count-1){
					$str.='-';
				}			
			}
		//var_dump("tabl format:",$str);
			return ($str);
		}
		else{
			return false;//si aucune chambre bookée dans l'interval on retourne false;
		}

	}


	//fonction qui retourne le nombre de chambres réservées dans un interval de date
	public function getNumberBookedRooms($date_start,$date_end)
	{
		return count($this->getAllBookedRooms($date_start,$date_end));

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

<<<<<<< HEAD
	public function deleteBooking($id)
	{
		$sql = 'DELETE FROM bookings WHERE id_booking = :id';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id);
		if ($sth->execute()) {
			return true;
		}else{return false; }

	}	
		


}
=======
	public function get(body);
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd
