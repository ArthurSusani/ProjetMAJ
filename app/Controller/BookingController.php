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
			$this->show("booking/map");
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
		$validate = date("Y-m-d");
		$price = 100;
		$num = $BookingManager->create($id_user, $id_room, $begin, $end, $validate, $price);
		$this->redirectToRoute('booking_bill', ['id' => $id_user]);
	}
	//Julien:fonction  qui nous génère une facture au format PDF
	//le paramètre est l'id du client
	public function bill($clientId)
	{
		//je n'autorise cette fonction que si un utilisateur avec le role user est connecté
		
		if(isset($_SESSION['user'])){
		echo "argument clientId de la fonction bill: $clientId<br>";
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
		echo "<br>tableau ClientInfo: <br>";
		var_dump($ClientInfo);
		echo "<br>tableau BookingInfo: <br>";
		var_dump($BookingInfo);
		echo "<br>tableau fusion:<br>";
		/*Je fusionne les 2 tableaux pour en faire un seul pour le passer a la méthode show pour générer le pdf
		attention si j'ai 2 colonnes id qui portent le meme nom id je n'aurais que le premier champ id, donc
		mettre un nom différent pour un des deux, donc j'ai id_booking au lieu de id*/
		$ClientInfoAll=array_merge($ClientInfo,$BookingInfo);
		var_dump($ClientInfoAll);
		die();	
		//var_dump($_SESSION);
		echo "<br>";
		//var_dump($tab);
		echo 'indice 0 tableau:'. $ClientInfo['firstname'];
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



}