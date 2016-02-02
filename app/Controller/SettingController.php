<?php

namespace Controller;



class SettingController extends \W\Controller\Controller
{
	public function index()
	{
		$this->allowTo('admin');
		$this->show("setting/index");
	}

	public function users()
	{
		$this->allowTo('admin');
		$manager = new \Manager\LogsManager();
		$users = $manager->findAll();
		$this->show("setting/users", ['users' => $users]);
	}

	public function user()
	{
		$this->allowTo('admin');
		$id = $_POST['id_users'];
		$manager = new \Manager\LogsManager();
		$user = $manager->find($id);
		$this->show("setting/user", ['user' => $user]);
	}

	public function usersave($id)
	{
		$this->allowTo('admin');
		$manager = new \Manager\LogsManager();
		$verif = new \Manager\ContactManager();

		$userConf = [
			"lastname" => $lastname = strval (filter_var( filter_var( $_POST['lastname'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"firstname" => $firstname = strval (filter_var( filter_var( $_POST['firstname'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"adressClient" => $adressClient = strval (filter_var( filter_var( $_POST['address'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"postcodeClient" => $postcodeClient = strval (filter_var( filter_var( $_POST['postalCode'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"cityClient" => $cityClient = strval (filter_var( filter_var( $_POST['city'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"telephone" => $telephone = strval (filter_var( filter_var( $_POST['phone'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"role" => $role = strval (filter_var( filter_var( $_POST['role'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"birthday" => $birthday = strval (filter_var( filter_var( $_POST['birthday'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
			"mail" => $mail = strval (filter_var( filter_var( $_POST['mail'], FILTER_SANITIZE_STRING), FILTER_SANITIZE_SPECIAL_CHARS)),
		];

		if($manager->update($userConf, $id)){
			echo "oui";
		}else{echo "non";}
		$user = $manager->find($id);
		$this->show("setting/user", ['user' => $user]);
	}

	public function userdel()
	{
		$this->allowTo('admin');
		$id = $_POST['id_user'];
		$user = new \Manager\LogsManager();
		if($user->delete($id)){
			$string = "L'utilisateur vient d'être supprimé avec succès.";
		}else{$string = "Impossible de supprimé cet utilisateur.";}
		$this->show("status/sender",["string"=> $string ,"nb"=> 3, "link"=> "setting_users"] );
	}

	public function book(){
		$this->allowTo('admin');
		$book = new \Manager\BookingManager();
		$books = $book->findAll();
		$this->show("setting/book", ["books"=> $books]);
	}

	public function bookdel()
	{
		$this->allowTo('admin');
		$id = $_POST['id_book'];
		$user = new \Manager\BookingManager();
		if($user->delete($id)){
			$string = "La reservation vient d'être supprimé avec succès.";
		}else{$string = "Impossible de supprimé cette reservation.";}
		$this->show("status/sender",["string"=> $string ,"nb"=> 3, "link"=> "setting_book"] );
	}

	public function comment(){
		$this->allowTo('admin');
		$comment = new \Manager\OpinionManager();
		$comments = $comment->findAll();
		$this->show("setting/comment", ['comment'=>$comments]);
	}
	
	public function commentdel()
	{
		$this->allowTo('admin');
		$id = $_POST['id_comment'];
		$comment = new \Manager\OpinionManager();
		if($comment->delete($id)){
			$string = "Le commentaire vient d'être supprimé avec succès.";
		}else{$string = "Impossible de supprimé ce commentaire.";}
		$this->show("status/sender",["string"=> $string ,"nb"=> 3, "link"=> "setting_comment"] );
	}






}