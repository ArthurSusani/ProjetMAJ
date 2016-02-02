<?php
	namespace Controller;

	class OpinionController extends \W\Controller\Controller {
		
		public function opinion()
		{
			$insert = false;
			$opinionManager = new \Manager\OpinionManager();
			if(isset($_POST['submit'])){
				$opinion = [
					"id_logs"=>$_SESSION['user']['id'],
					"datestart"=> date('Y/m/d', strtotime($_POST['datestart'])),
					"dateend"=> date('Y/m/d', strtotime($_POST['dateend'])),
					"room"=>$_POST['room'],
					"rate"=>$_POST['rate'],
					"comment"=>$_POST['comment']
						];
				if ($opinionManager->insert($opinion)) {
					$insert = true;
				}
			}
			$viewall = $opinionManager->viewopinion();

			if (empty($viewall)) {
				$viewall = "Il n'y a actuellement aucun commentaire.";
			}
			if ($insert) {
				$string = "Votre commentaire a bien été enregistré";
<<<<<<< HEAD
				$this->show('status/sender', ['string' => $string, 'link'=> 'opinion_show', 'nb'=> 4]);
=======
				$this->show('status/sender', ['string' => $string, 'link'=> 'home', 'nb'=> 4]);
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd
			}
			$this->show('opinion/opinion',['viewall'=>$viewall]);
		}



		/*public function showopinion()
		{
			$view = new \Manager\OpinionManager();
			$viewall = $view->viewopinion();

			$this->redirectToRoute('opinion_insert',['viewall'=>$viewall]);
		}*/

		/*public function details($id)
		{
			$details = new \Manager\OpinionManager();
			$viewall = $details->findByListId($id);
			$this->show("contact/details", ['viewall'=>$viewall]);
		}*/
	}
?>