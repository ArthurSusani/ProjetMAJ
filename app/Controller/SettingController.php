<?php

namespace Controller;



class SettingController extends \W\Controller\Controller
{
	public function index()
	{

		$this->allowTo('admin');
		$this->show("setting/index");
	}

}