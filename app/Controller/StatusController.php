<?php

namespace Controller;



class StatusController extends \W\Controller\Controller
{
	public function sender($string, $link = "home" , $nb = 4)
	{
		echo "fr";
		die();
		$this->show('status/sender', ['string' => $string, 'link' => $link, 'nb' => $nb]);
	}

}