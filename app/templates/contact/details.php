<?php $this->layout('layout',['title' => 'Détails des demandes']) ?>

<?php $this->start('main_content') ?>

	<ul>	
		<?php foreach ($viewall as $view) : ?>	
			<li>
			<p>Expéditeur : <?= $view['firstname']; echo " " ?><?= $view['lastname'] ?></p>
			Télèphone : <?= $view['phone'] ?><br>
			Email : <?= $view['mail'] ?><br>
			Sujet : <?= $view['subject'] ?><br>
			Message : <?= $view['message'] ?></li>		
		<?php endforeach ?>
	</ul>

<?php $this->stop('main_content') ?>