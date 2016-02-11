<?php $this->layout('layout', ['title' => 'Telephone !']) ?>

<?php $this->start('main_content') ?>

<p>Le service de réservation téléphonique est disponible de 8h à 20h, du lundi au dimanche.</p>
<ul id="ul_standard_tel">
	<li>Numéro de téléphone : 0382547030</li>
	<li>Numéro de Fax : 0382547031</li>
</ul>
<img id="img_standard_tel" src="<?= $this->assetUrl('img/standard-telephonique.jpg') ?>" alt="standard_tel">


<?php $this->stop('main_content') ?>