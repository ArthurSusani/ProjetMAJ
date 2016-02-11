<?php $this->layout('layout', ['title' => 'Vues 3D']) ?>

<?php $this->start('main_content') ?>
	<h2>Voici quelque vues 3d de l'intérieur de nos chambres</h2>
	<img class="vue3d" src="<?= $this->assetUrl('img/etage0_vue_3d_1.PNG') ?>" alt="vue3d_1">
	<img class="vue3d" src="<?= $this->assetUrl('img/etage0_vue_3d_2.PNG') ?>" alt="vue3d_2">
	<img class="vue3d" src="<?= $this->assetUrl('img/etage0_vue_3d_3.PNG') ?>" alt="vue3d_3">
	<img class="vue3d" src="<?= $this->assetUrl('img/etage0_vue_3d_4.PNG') ?>" alt="vue3d_4">
	<em>Copyright © Autodesk Homestyler</em>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/presentation.css') ?>">
<?php $this->stop('css') ?>