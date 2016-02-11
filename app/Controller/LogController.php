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
			!empty($_POST['address']) && !empty($_POST['postalCode']) && !empty($_POST['city']) && isset($_POST['phone']) &&
			!empty($_POST['phone'])) {
			//echo ('clic sur formulaire enregistrement client');
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
				'telephone' => $_POST['phone'],
			);
			//var_dump($myClient);
			$res=$LogsManager->insert($myClient, true);
			//si le résultat de insert est false alors l'utilisateur existe déja et on affiche un popup d'alerte
			if($res===false){
				echo '<script>alert("L\'Utilisateur existe déja!");</script>';
			}
			else{
				$string = "Utilisateur créé avec succès.";
				$this->show('status/sender', ['string' => $string, 'link'=> 'log_connect', 'nb'=> 2]);
			}
			

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
			$string = "Bonjour ".$_SESSION['user']['lastname']." ". $_SESSION['user']['firstname'] .", vous ètes connecté.";
			$this->show('status/sender', ['string' => $string, 'link'=> 'home', 'nb' => 3]);
		} 
		$string = "Mauvais Mot de passe/Adresse Email.";
		$this->show('status/sender', ['string' => $string, 'link'=> 'log_connect', 'nb' => 3]);
	}


	public function returnUser($user)
	{
		$manager = new \Manager\LogsManager();
		$manager->returnInfoUsers($user);
	}

	public function error()
	{
		echo "Impossible de ce connecter, mauvais mot de passe ou mauvais login.";
	}

	public function disconnect()
	{
		$authentifManager = new \W\Security\authentificationManager();
		$authentifManager->logUserOut();
		$manager = new \Manager\LogsManager();
		$manager->deleteInfoUsers();
		$this->show('default/home');
	}

	public function userconfig()
	{
		$manager = new \Manager\LogsManager();
		$booking = new \Manager\BookingManager();
		$id = $_SESSION['user']['id'];
		$user = $manager->find($id);
		$book = $booking->getBookingInfoByClientId($id);
		$this->show("log/userconfig", ['user' => $user, 'book'=> $book]);
	}

	public function usersave()
	{
		$manager = new \Manager\LogsManager();
		$id = $_SESSION['user']['id'];
		$userConf = [
			"lastname" => $lastname = strval (filter_var( filter_var( $_POST['lastname'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"firstname" => $firstname = strval (filter_var( filter_var( $_POST['firstname'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"adressClient" => $adressClient = strval (filter_var( filter_var( $_POST['address'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"postcodeClient" => $postcodeClient = strval (filter_var( filter_var( $_POST['postalCode'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"cityClient" => $cityClient = strval (filter_var( filter_var( $_POST['city'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"telephone" => $telephone = strval (filter_var( filter_var( $_POST['phone'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"birthday" => $birthday = strval (filter_var( filter_var( $_POST['birthday'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"mail" => $mail = strval (filter_var( filter_var( $_POST['mail'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
		];

		if($manager->update($userConf, $id)){
			echo "oui";
		}else{echo "non";}
		$user = $manager->find($id);
		$this->show("log/userconfig", ['user' => $user]);
	}

	public function bookdel($id)
	{
		$deleteBook = new \Manager\BookingManager();
		if ($deleteBook->deleteBooking($id)) {
			$string = "Votre réservation à bien été supprimé.";
			$this->show('status/sender', ['string' => $string, 'link'=> 'log_userconfig', 'nb' => 3]);
		}else{ 
			$string = "Erreur de suppression, votre réservation est toujours effective.";
			$this->show('status/sender', ['string' => $string, 'link'=> 'log_userconfig', 'nb' => 3]);
		}

	}
}