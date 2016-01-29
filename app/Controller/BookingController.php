<?php

namespace Controller;



class BookingController extends \W\Controller\Controller
{
	public function index()
	{
		$this->show("booking/index");
	}

	public function error()
	{
		$this->show("booking/error");
	}

	public function map()
	{
		$BookingManager = new \Manager\BookingManager();
		//var_dump($BookingManager->isRoomBooked(4));
		//var_dump($BookingManager->getRoomPriceByRoomId(4));
		//var_dump('nb room',$BookingManager->getNumberOfRooms());
		//var_dump('tableau id room',$BookingManager->getAllRoomsId());
		$tab_booked_room=$BookingManager->getAllBookedRooms();
		$nb_room=$BookingManager->getNumberOfRooms();
		$nb_book_room=$BookingManager->getNumberBookedRooms();
		//var_dump("nb book room",$nb_book_room);
		$str=$BookingManager->bookedRoomsArrayIntoString($tab_booked_room);
		$this->show("booking/map",['nb_booked_room'=>$nb_book_room,'nb_room'=>$nb_room,'tableau_booked_room'=>$str]);
	}
	//traitement ajax
	public function map_ajax(){
		if(isset($_POST){
		$date_start = $_POST['ajax_date_start'];
		$date_end = $_POST['ajax_date_end'];
		}
	}

	public function pay()
	{
		echo 'methode pay';

		$BookingManager = new \Manager\BookingManager();
		$id_room = 45;
		$id_user = $_SESSION['user']['id'];
		$begin = $_POST['date_start'];//attention firefox ne gère pas les champs input date, il faut entrer manuellement au format Y-M-D
		//ou utiliser un contorle Jquery DatePicker
		$end = $_POST['date_end'];

		//attention on vérifie la cohérence coté client avec jquery mais il faut quand meme vérifier coté serveur!
		$bookingDays=$this->CalcBookingDuration($begin,$end);
		if($bookingDays<1){
			echo 'nombre de jour incohérent!';
			die();
		}
		$validate = date("Y-m-d");
		$price = 100;
		$num = $BookingManager->create($id_user, $id_room, $begin, $end, $validate, $price);
		//on avertit le client que sa réservation est faite avec succès
		//echo "<script>alertMsg('Réservation faite')</script>";
		//on envoit la facture remplié avec les données du client
		$this->redirectToRoute('booking_bill', ['id' => $id_user]);
	}
	//Julien:fonction  qui nous génère une facture au format PDF
	//le paramètre est l'id du client
	public function bill($clientId)
	{
		//je n'autorise cette fonction que si un utilisateur avec le role user est connecté
		
		if(isset($_SESSION['user'])){
		//echo "argument clientId de la fonction bill: $clientId<br>";
			$newbm = new \Manager\BookingManager();
		//recupère les infos d'un client par son id dans un tableau
			$ClientInfo=$newbm->getClientInfoByClientId($clientId);
			if($ClientInfo===false){
			// théoriquement on arrive jamais ici
				echo 'aucune info pour cet id client ou id incorrect';
				die();
			}
		//recupère les infos booking d'un client par son id dans un tableau
			$BookingInfo=$newbm->getBookingInfoByClientId($clientId);
			if($BookingInfo===false){
				echo 'aucun info booking pour cet id client ou id incorrect';
				die();
			}

		/*Je fusionne les 2 tableaux pour en faire un seul pour le passer a la méthode show pour générer le pdf
		attention si j'ai 2 colonnes id qui portent le meme nom id je n'aurais que le premier champ id, donc
		mettre un nom différent pour un des deux, donc j'ai id_booking au lieu de id*/
		$ClientInfoAll=array_merge($ClientInfo,$BookingInfo);
		//var_dump($ClientInfoAll);
		$bookingDays=$this->CalcBookingDuration($ClientInfoAll['begin'],$ClientInfoAll['end']);
		if($bookingDays<1){
			echo 'nombre de jour incohérent!';
			die();
		}
		//je rajoute un élement nombre jour booking a la fin de mon tableau
		$ClientInfoAll['bookingDays']=$bookingDays;
		// die();
		//je passe en paramètre au template un tableau qui contient les données clients pour construction du pdf
		$this->show("booking/facture_hotel",$ClientInfoAll);
	}
		//si personne n'est connecté, erreur 403
	else{
		$this->showForbidden();
	}
}
public function Phone(){
	$this->show('booking/phone');
}
	//julien: fonction qui calcule et retourne la durée d'une reservation
public function CalcBookingDuration($begin,$end){

	$strtime_begin = strtotime($begin);
	$strtime_end= strtotime($end);
	$datediff = $strtime_end - $strtime_begin;
	$datediff_floor= floor($datediff/(60*60*24));
   	//si la date de début et la date de fin son identique alors la durée du séjour est de 1
	//donc il faut toujours ajouter 1 au nombre de jour
	return $datediff_floor+1;
}


}