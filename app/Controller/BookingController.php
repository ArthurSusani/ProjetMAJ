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
		$BookingManager = new \Manager\BookingManager();

		$id_room = 45;
		$id_user = $_SESSION['id'];
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