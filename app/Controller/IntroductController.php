<?php

	namespace Controller;

	class IntroductController extends \W\Controller\Controller
	{
		public function room(){

			$rooms = new \Manager\IntroductManager();
			$rooms = $rooms->room();
			$this->show('introduct/room',['rooms'=>$rooms]);
		}

		public function roomdetail($id)
		{
			$rooms = new \Manager\IntroductManager();
			$rooms = $rooms->findByListId($id);
			$this->show("introduct/roomdetail", ['rooms'=>$rooms]);
		}

		public function hostel()
		{
			$this->show("introduct/hostel");
		}

		public function area()
		{
			$this->show("introduct/area");
		}

		public function index()
		{
			$this->show("introduct/index");
		}
		/*public function details($idToDisplay)
		{
			$accountsManager = new \Manager\AccountsManager();
			$accountToDisplay = $accountsManager->find($idToDisplay);
			$this->show('accounts/details', ['account' => $accountToDisplay]);
		}*/
	}