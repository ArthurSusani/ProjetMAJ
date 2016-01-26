<?php $this->layout('layout',['title' => 'Détails des demandes']) ?>

<?php $this->start('main_content') ?>

	<ul>	
		<?php foreach ($viewall as $view) : ?>	
			<li><?= $view['subject'] ?><br>
			<?= $view['message'] ?></li>		
		<?php endforeach ?>
	</ul>

<?php $this->stop('main_content') ?>