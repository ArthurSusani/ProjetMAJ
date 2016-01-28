<?php
	namespace Controller;

	class OpinionController extends \W\Controller\Controller {
		
		public function opinion()
		{
			if(isset($_POST['send'])){
				$opinionManager = new \Manager\OpinionManager();
				$opinionManager->insertopinion($_POST['id'],$_POST['room'],$_POST['message']);
			}
			$this->show("opinion/opinion");
		}

		public function showopinion()
		{
			$view = new \Manager\OpinionManager();
			$viewall = $view->viewopinion();
			$this->show('opinion/showopinion',['viewall'=>$viewall]);
		}

		/*public function details($id)
		{
			$details = new \Manager\OpinionManager();
			$viewall = $details->findByListId($id);
			$this->show("contact/details", ['viewall'=>$viewall]);
		}*/
	}
?>