<?php $this->layout('layout', ['title' => 'Les environs']) ?>

<?php $this->start('main_content') ?>
	<h2>a propos du coin</h2>
	
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/presentation.css') ?>">
<?php $this->stop('css') ?>