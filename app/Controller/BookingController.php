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
	if(isset($_SESSION['logon'])){
		if($_SESSION['logon'] == false){
			$this->show("booking/map");

		}else{
			// Page d'erreur ? Redirection page de connection ? d'inscription ?
		}
	}else{$this->show("booking/map");}//En attente des session
	}

	public function pay()
	{
		$BookingManager = new \Manager\BookingManager();

		$id_room = 1;
		$id_user = 1;//$_SESSION['id'];
		$begin = $_POST['date_start'];
		$end = $_POST['date_end'];
		$validate = date("Y-m-d");
		$price = 100;
		$num = $BookingManager->create($id_user, $id_room, $begin, $end, $validate, $price);
		$this->redirectToRoute('booking_bill', ['id' => $num]);
	}

	public function bill()
	{
		$this->show("booking/bill" );
	}


}