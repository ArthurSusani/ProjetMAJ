<?php $this->layout('layout', ['title' => 'Présentation']) ?>

<?php $this->start('main_content') ?>
	<h2>Home présentation</h2>
	
	<a href="<?=  $this->url('introduct_room') ?>">Chambres</a>
	<a href="<?=  $this->url('introduct_hostel') ?>">Hotel</a>
	<a href="<?=  $this->url('introduct_area') ?>">Environs</a>

<?php $this->stop('main_content') ?>
<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/presentation.css') ?>">
<?php $this->stop('css') ?>