<?php

	namespace Controller;

	class LogController extends \W\Controller\Controller
	{
		public function config()
		{
			$logManager = new \Manager\LogManager();
			$accounts = $logManager->findAll('owner');
			$this->show('Log/register', ['log' => $accounts]);
			// On aura accès à $accounts dans liste.php
		}

		public function register()
		{
			$this->show("log/register");
		}


		/*public function details($idToDisplay)
		{
			$accountsManager = new \Manager\AccountsManager();
			$accountToDisplay = $accountsManager->find($idToDisplay);
			$this->show('accounts/details', ['account' => $accountToDisplay]);
		}*/
	}