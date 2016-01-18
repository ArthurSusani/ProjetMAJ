<?php

namespace Controller;

class LogController extends \W\Controller\Controller {
	public function config() {
		$logManager = new \Manager\LogManager();
		$accounts = $logManager->findAll('owner');
		$this->show('Log/register', ['log' => $accounts]);
		// On aura accès à $accounts dans liste.php
	}

//fonction qui permet de traiter de formulaire d'enregistrement d'un client et de le créer.
	public function register() {
		if (isset($_POST['save'])) {
			echo ('clic sur formulaire enregistrer');
			$LogManager = new \Manager\LogManager();
			//je stock toutes les variables du formulaire dans un tableau
			$myClient=array('name'=>$_POST['firstname'])

		}
		$this->show("log/register");

		// if (isset($_POST['send'])) {
		// 	var_dump($_POST);
		// 	echo 'entré dans le formulaire';
		// }

	}

	/*public function details($idToDisplay)
		{
			$accountsManager = new \Manager\AccountsManager();
			$accountToDisplay = $accountsManager->find($idToDisplay);
			$this->show('accounts/details', ['account' => $accountToDisplay]);
		}*/
}