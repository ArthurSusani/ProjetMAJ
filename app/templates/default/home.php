<?php $this->layout('layout', ['title' => 'Accueil !']) ?>

<?php $this->start('main_content') ?>
		<div class="container">
			<div id="accueil">

				<p>Bienvenue sur le site de l'hotel webforce3<br>
				Pour réserver une chambre merci de bien vouloir créer un compte !</p>

				<a href="<?= $this->url('log_register') ?>" >Inscription</a>
			</div>
		
			<div id="map">
				<script>
					google.maps.event.addDomListener(window, 'load', initMap);
				</script>
			</div>

			<div id="adresse">
				<img src="<?= $this->assetUrl('img/logo_hotel.png') ?>" width="160" height="160"/>
				<p>Hôtel WebForce 3</p>
				<p>6 Rue Gino Raimondi</p>
				<p>Piennes, Lorraine</p>
			</div>
		</div>

<?php $this->stop('main_content') ?>
