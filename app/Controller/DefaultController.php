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

	public function comment()
	{
		$this->show('default/comment');
	}
}