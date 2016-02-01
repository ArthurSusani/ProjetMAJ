<?php $this->layout('layout', ['title' => 'A propos de notre équipe']) ?>

<?php $this->start('main_content') ?>
	
	
	<img src="<?= $this->assetUrl('img/equipehotel.jpg') ?>" alt="" class="imgTeam" width="500" height="800">
	<p>L'Hotel WF3 est composé d'une équipe permanente de 5 personnes et accueille chaque année près de 1000 visiteurs. Elle est renforcée par du personnel saisonnier pour répondre à un afflux touristique plus important.
	 Cette équipe assure principalement les missions d’accueil, d’information, de promotion, d’animation, de commercialisation et de coordination des acteurs locaux dans l’intérêt du tourisme local.
Une question ? N'hésitez pas à nous contacter. Nous sommes à votre disposition pour vous informer.</p>


<?php $this->stop('main_content') ?>
