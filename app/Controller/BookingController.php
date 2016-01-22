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
		$id_user = $_SESSION['id'];
		$begin = $_POST['date_start'];//attention firefox ne gère pas les champs input date, il faut entrer manuellement au format Y-M-D
		$end = $_POST['date_end'];
		$validate = date("Y-m-d");
		$price = 100;
		$num = $BookingManager->create($id_user, $id_room, $begin, $end, $validate, $price);
		die();
		$this->redirectToRoute('booking_bill', ['id' => $id_user]);
	}
	//fonction  qui nous génère une facture au format PDF
	//le paramètre est l'id du client
	public function bill($clientId)
	{
		//je n'autorise cette fonction que si un utilisateur avec le role user est connecté
		
		if(isset($_SESSION['user'])){
		echo "argument clientId de la fonction bill: $clientId<br>";
		$newbm = new \Manager\BookingManager();
		//recupère les infos d'un client par son id dans un array
		$ClientInfo=$newbm->getClientInfoByClientId($clientId);
		if($ClientInfo===false){
			echo 'aucune info pour cet id client';
			die();
		}
		var_dump($ClientInfo);	
		//var_dump($_SESSION);
		echo "<br>";
		//var_dump($tab);
		echo 'indice 0 tableau:'. $ClientInfo['firstname'];
		//je passe en paramètre au template un tableau qui contient les données clients pour construction du pdf
		$this->show("booking/facture_hotel",$ClientInfo);
		}
		else{
			$this->showForbidden();
		}
	}


}