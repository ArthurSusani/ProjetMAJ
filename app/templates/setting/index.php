<?php $this->layout('layout', ['title' => 'Configuration Admin !']) ?>

<?php $this->start('main_content') ?>

<div class="menuConf">
	<ul style="listconfig">
		<li><h3>Gestion des réservations</h3></li>
		<p>Ici, gérer les réservation effectué par les utilisateurs(modifier, supprimer,etc...)</p>
		<a href=" <?= $this->url('setting_book') ?> " title="réservations">Gestionnaire</a>

		<li><h3>Gestion des utilisateurs</h3></li>
		<p>Ici, gérer les différents utilisateurs(Changer infos, role,etc...)</p>
		<a href=" <?= $this->url('setting_users') ?> " title="utilisateurs">Gestionnaire</a>

		<li><h3>Gestion des avis</h3></li>
		<p>Ici, gérer les commentaires laissés par les utilisateurs(modérer,supprimer, sanctionner, etc ...)</p>
		<a href=" <?= $this->url('setting_comment') ?> " title="avis">Gestionnaire</a>
		
		<li><h3>Gestion des réclamations</h3></li>
		<a href=" <?= $this->url('contact_view') ?> " title="">Gestionnaire</a>
	</ul>	
</div>


	

	

	



<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/config.css') ?>">
<?php $this->stop('css') ?>