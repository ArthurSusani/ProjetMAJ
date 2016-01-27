<?php

namespace Controller;



class StatusController extends \W\Controller\Controller
{
	public function sender($string, $nb = 4, $link = "home")
	{
		$this->show('status_sender', ['string' => $string]);
	}

}