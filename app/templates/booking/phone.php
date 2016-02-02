<?php $this->layout('layout', ['title' => 'Réservation par télèphone']) ?>

<?php $this->start('main_content') ?>

<img src="<?= $this->assetUrl('img/standard_telephonique.jpg') ?>" alt="">

<p>Le service de réservation téléphonique est disponible de 8h à 20h, du lundi au dimanche.</p>
<<<<<<< HEAD
<ul id="ul_standard_tel">
	<li>Numéro de téléphone : 0382547030</li>
	<li>Numéro de Fax : 0382547031</li>
=======
<ul>
	<li>Numéro de téléphone : 03 82 54 70 30 (prix d'un appel local)</li>
	<li>ou</li>
	<li>Numéro de Fax : 03 82 54 70 31</li>
>>>>>>> 37f9ea48e75cbd9dffb339153f4f1b0df57526fd
</ul>
<img id="img_standard_tel" src="<?= $this->assetUrl('img/standard-telephonique.jpg') ?>" alt="standard_tel">


<?php $this->stop('main_content') ?>