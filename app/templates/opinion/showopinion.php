<?php $this->layout('layout', ['title' => 'Bureau des réclamations']) ?>

<?php $this->start('main_content') ?>
	<div class="opinion">
		<ul>
			<?php foreach ($viewall as $view) : ?>		
				<li>
					Nom : <?= $view['firstname'] ?>
					<?= $view['lastname'] ?><br>				
					Séjour du : <?= $view['datestart'] ?> au : <?= $view['dateend'] ?><br>
					Dans la <?= $view['room'] ?><br>
					Note : <?= $view['rate'] ?><br>
					Commentaire : <?= $view['comment'] ?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
<?php $this->stop('main_content') ?>