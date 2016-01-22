<?php

namespace Controller;

class LogController extends \W\Controller\Controller 
{

	public function config() {
		$logManager = new \Manager\LogManager();
		$accounts = $logManager->findAll('owner');
		$this->show('Log/register', ['log' => $accounts]);
		// On aura accès à $accounts dans liste.php
	}

//fonction qui permet de traiter de formulaire d'enregistrement d'un client et de le créer.
	//todo
	//fait:faire le traitement d'erreurs des champs du formulaire
	//fait:hasher le password avec la fonction password_hash et vérifier avec password_verify
	//besoin de faire des requetes préparées?
	//qui a accès a ce formulaire? les users? les admins?

	public function register() {
		//var_dump($_POST);
		//$this->allowTo(['admin', 'user']); //ici je défini quels roles ont accès au formulaire
		if (isset($_POST['save']) && isset($_POST['password']) && isset($_POST['mail']) &&
			isset($_POST['address']) && isset($_POST['postalCode']) && isset($_POST['city']) &&
			!empty($_POST['password']) && !empty($_POST['mail']) &&
			!empty($_POST['address']) && !empty($_POST['postalCode']) && !empty($_POST['city'])) {
			echo ('clic sur formulaire enregistrement client');
			$LogsManager = new \Manager\LogsManager();
			//je stock toutes les variables du formulaire dans un tableau
			//conversion de l'input type date dans le bon format (sens inversé) pour le type date de SQL
			$dateConvert = date('Y/m/d', strtotime($_POST['birthday']));
			$myClient = array('firstname' => $_POST['firstname'],
				'lastname' => $_POST['lastname'],
				'mail' => $_POST['mail'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'birthday' => $dateConvert,
				'adressClient' => $_POST['address'],
				'postcodeClient' => $_POST['postalCode'],
				'cityClient' => $_POST['city'],
			);
			var_dump($myClient);
			$LogsManager->insert($myClient, true);

		}
		$this->show("log/register");

	}

	public function connect()
	{
		$this->show("log/connect");
	}

	public function confirm()
	{
		$account = $_POST['account'];
		$password = $_POST['pwdVal'];
		$authentifManager = new \W\Security\authentificationManager();
		$account = strip_tags(trim($account));
		$userId = $authentifManager->isValidLoginInfo($account, $password);

		if (!empty($userId)) {
			$usersManager = new \Manager\LogsManager();
			$user = $usersManager->find($userId);
			$authentifManager->logUserIn($user);
			$this->show('default/home');
		} 
		$this->show("log/connect/error");
	}


	public function returnUser($user)
	{
		$manager = new \Manager\LogsManager();
		$manager->returnInfoUsers($user);
	}

	public function error()
	{
		echo "Impossible de ce connecter, mauvais mdp ou mauvais login";
	}

	public function disconnect()
	{
		$authentifManager = new \W\Security\authentificationManager();
		$authentifManager->logUserOut();
		$manager = new \Manager\LogsManager();
		$manager->deleteInfoUsers();
		$this->show('default/home');
	}
}