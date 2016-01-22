<?php $this->layout('layout', ['title' => 'Bureau des réclamations']) ?>

<?php $this->start('main_content') ?>

	<ul>
		<?php foreach ($viewall as $view) : ?>		
			<li><a href="<?= $this->url('contact/details', ['id' => $view['id']]) ?>">
			<?= $view['subject'] ?></a></li>
		<?php endforeach ?>
	<ul>
	
<?php $this->stop('main_content') ?>