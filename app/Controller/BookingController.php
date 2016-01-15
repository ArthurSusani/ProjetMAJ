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

	public function pay($booking)
	{
		$_POST['date_start'];
		$_POST['date_end'];

	}



}