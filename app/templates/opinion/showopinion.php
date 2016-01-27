<?php $this->layout('layout', ['title' => 'Bureau des réclamations']) ?>

<?php $this->start('main_content') ?>
	
	<ul>
		<?php foreach ($viewall as $view) : ?>		
			<li>
				Nom : <?= $view['firstname'] ?>
				<?= $view['lastname'] ?><br>
				Séjour : <?= $view['room'] ?><br>
				Commentaire : <?= $view['comment'] ?>
			</li>
		<?php endforeach ?>
	<ul>

<?php $this->stop('main_content') ?>