<?php
	namespace Controller;

	class OpinionController extends \W\Controller\Controller {
		
		public function opinion()
		{
			if(isset($_POST['send'])){
				$opinionManager = new \Manager\OpinionManager();
				$opinionManager->insertopinion($_POST['datestart'],$_POST['dateend'],$_POST['room'],$_POST['rate'],$_POST['comment']);
			}
			$this->show("opinion/opinion");
		}

		public function showopinion()
		{
			$view = new \Manager\OpinionManager();
			$viewall = $view->viewopinion();
			$this->show('opinion/showopinion',['viewall'=>$viewall]);
		}
	}
?>