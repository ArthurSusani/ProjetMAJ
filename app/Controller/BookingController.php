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
		$nb_room=$BookingManager->getNumberOfRooms();
		//echo('nombre de chambre dans la base:'.$nb_room.'<br>');
		//$tab_booked_room=$BookingManager->getAllBookedRooms('2016-01-27','2016-01-28');
		//$nb_book_room=$BookingManager->getNumberBookedRooms('2016-01-27','2016-01-28');
		//echo $nb_book_room;
		//var_dump("nb book room",$nb_book_room);
		//var_dump('tableau booked room',$tab_booked_room);
		//$str=$BookingManager->bookedRoomsArrayIntoString($tab_booked_room);
		//var_dump($str);
		$this->show("booking/map",['nb_room'=>$nb_room]);
	}
<<<<<<< HEAD

	//méthode traitement ajax qui va renvoyer la réponse ajax vers le script ajax.js
	public function getbookedmapmethod(){
		$BookingManager = new \Manager\BookingManager();
		//si on recoit une requete ajax en méthode POST...
		if(isset($_POST)){
			//var_dump($_POST);
			//je récupère mes arguements: date début/ date fin du calendrier datepicker	
			$date_start = $_POST['data_date_start'];
			$date_end = $_POST['data_date_end'];
			//je lance ma recherche dans la base SQL et je renvois les données en mode text brut ici
			$BookingManager->SendAjaxAllBookedRooms($date_start,$date_end);
=======
	//traitement ajax
	public function map_ajax()
	{
		if(isset($_POST)){
		$date_start = $_POST['ajax_date_start'];
		$date_end = $_POST['ajax_date_end'];
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd
		}
	}

	public function pay()
	{
		
		$this->allowTo('user','admin');
		$BookingManager = new \Manager\BookingManager();
		//var_dump($_POST);
		//var_dump($_SESSION);
		//je recupere le champ hidden "input_client_selected_room" avec les chambres selectionnées...
		if(!isset($_POST['client_selected_room'])|| empty($_POST['client_selected_room'])){
			echo 'erreur pas de rooms selectionnee';//on affiche jamais ca en principe car on vérifie aussi coté client
			return false;
		}

		$id_user = $_SESSION['user']['id'];
		$begin = $_POST['date_start'];//attention firefox ne gère pas les champs input date, il faut utiliser un controle Jquery DatePicker
		$end = $_POST['date_end'];
				//attention on vérifie la cohérence coté client avec jquery mais il faut quand meme vérifier coté serveur!
		$bookingDays=$this->CalcBookingDuration($begin,$end);
		if($bookingDays<1){
			echo 'nombre de jour incohérent!';
			die();
		}
		//echo 'nb jour booking: '.$bookingDays;
		//echo 'book duration: '.$bookingDays;
		$str_input_client_selected_room=$_POST['client_selected_room'];
		$_SESSION['user']['booked_room']=$str_input_client_selected_room;
		//var_dump($str_input_client_selected_room);
		$tab_rooms=split('-',$str_input_client_selected_room);
		$nb_room=count($tab_rooms);
		//var_dump($tab_rooms);
		$total_price=$BookingManager->getTotalPriceByRooms($tab_rooms,$bookingDays);
		//echo 'prix total facture: '.$total_price.' euros';

		//il faut que je créé autant de booking dans la table intérmédiaire que j'ai de client_selected_room avec le bon prix pour chaque booking?
		$validate = date("Y-m-d H:i:s");
		$booking_id = $BookingManager->create($id_user, $begin, $end, $validate, $total_price,$tab_rooms);
		//on avertit le client que sa réservation est faite avec succès
		
		
		//echo "<script>alert('Réservation enregistrée correctement. Cliquez pour voir votre facture');</script>";
		//die();
		//on envoit la facture remplie avec les données du client
		$this->redirectToRoute('booking_bill', ['id' => $id_user, 'id_booking' =>$booking_id]);
	}
	//Julien:fonction  qui nous génère une facture au format PDF
	//le paramètre est l'id du client
	public function bill($clientId,$BookingId)
	{
		//je n'autorise cette fonction que si un utilisateur avec le role user est connecté
		echo 'arg 1 '.$clientId . 'arg 2:'.$BookingId.'<br>';
		if(isset($_SESSION['user'])){
		//echo "argument clientId de la fonction bill: $clientId<br>";
			$newbm = new \Manager\BookingManager();
		//recupère les infos d'un client par son id dans un tableau
			$ClientInfo=$newbm->getClientInfoByClientId($clientId);
			if($ClientInfo===false){
			// théoriquement on arrive jamais ici
				echo 'aucune info pour cet id client';
				die();
			}
		//recupère les infos booking d'un client par son id dans un tableau
			$BookingInfo=$newbm->getBookingInfoByBookingId($BookingId);
			if($BookingInfo===false){
				echo 'aucun info booking pour cet id booking ';
				die();
			}
		

		/*Je fusionne les 2 tableaux pour en faire un seul pour le passer a la méthode show pour générer le pdf
		attention si j'ai 2 colonnes id qui portent le meme nom id je n'aurais que le premier champ id, donc
		mettre un nom différent pour un des deux, donc j'ai id_booking au lieu de id*/
		$ClientInfoAll=array_merge($ClientInfo,$BookingInfo);
		$bookingDays=$this->CalcBookingDuration($ClientInfoAll['begin'],$ClientInfoAll['end']);
		if($bookingDays<1){
			echo 'nombre de jour incohérent!';
			die();
		}
		//je rajoute un élement nombre jour booking a la fin de mon tableau
		$ClientInfoAll['bookingDays']=$bookingDays;
		$ClientInfoAll['id_room']=$_SESSION['user']['booked_room'];
		var_dump($ClientInfoAll);
		echo '<script>alert("Réservation enregistrée correctement. Cliquez sur OK pour voir votre facture")</script>';
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