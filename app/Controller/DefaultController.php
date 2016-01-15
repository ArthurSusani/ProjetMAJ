<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function about()
	{
		$this->show('default/about');
	}

	public function contact()
	{
		$this->show('default/contact');
	}

	public function whoarewe()
	{
		$this->show('default/whoarewe');
	}

	public function comment()
	{
		$this->show('default/comment');
	}
}