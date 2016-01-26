<?php

namespace Controller;



class StatusController extends \W\Controller\Controller
{
	public function sender($string)
	{
		$this->show('status_sender', ['string' => $string]);
	}

}