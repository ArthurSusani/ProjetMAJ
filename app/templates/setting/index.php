<?php $this->layout('layout', ['title' => 'Configuration Admin !']) ?>

<?php $this->start('main_content') ?>

<div class="menuConf">
	<ul style="listconfig">
		<li><h3>Gestion des réservations</h3></li>


		<li><h3>Gestion des utilisateurs</h3></li>
		<p>Ici, gérer les différents utilisateurs(Changer infos, role,etc...)</p>
		<a href=" <?= $this->url('setting_users') ?> " title="">Gestionnaire</a>

		<li><h3>Gestion des avis</h3></li>
		<a href="" title=""></a>
	</ul>	
</div>


	

	

	



<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/config.css') ?>">
<?php $this->stop('css') ?>