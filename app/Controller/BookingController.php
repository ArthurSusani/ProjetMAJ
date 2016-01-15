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




}