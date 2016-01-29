<?php

namespace Controller;



class AjaxController extends \W\Controller\Controller{
	public function ajax(){
		$this->show("ajax/booking");
	}
}