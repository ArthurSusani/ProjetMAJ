<?php $this->layout('layout', ['title' => 'Bienvenue Sur WebForce3']) ?>

<?php $this->start('main_content') ?>
		<div class="">
			<div id="accueil">

				<p>Bienvenue sur le site de l'hotel webforce3<br>
				Pour réserver une chambre merci de bien vouloir créer un compte !</p>

				<a href="<?= $this->url('log_register') ?>" >Inscription</a>
			</div>
		
			<div id="map">
				<script>
					google.maps.event.addDomListener(window, 'load', initMap());
				</script>
			</div>


			<div id="adresse">
				<div class="hotel">
					<img src="<?= $this->assetUrl('img/logo_hotel.png') ?>" width="180" height="180"/>
					<p>Hôtel WebForce 3</p>
					<p>6 Rue Gino Raimondi</p>
					<p>Piennes, Lorraine</p>
				</div>
				<div class="code">
					<p>Flashez ce QR code!<p>
					<a href='http://www.unitag.io/qrcode'><img src='http://www.unitag.io/qreator/generate?crs=xnjFkEn%252FP85fCPDXJ%252FXXKnPnKU%252FtWVh9E7ei8Ex%252BR4XsTvus59MiRl4OtJ5Y%252F3aRXopA7Qn4wJ6m3qLfsP4IWv39ocSd3mMczmj1AuyiW6K%252F58n8n8s5NK61vAUi6GUR9QhYs1xUoNWG3PC4owAgU1Q%252FHThW3FIfdeEUqZ%252BlJgc%253D&crd=fhOysE0g3Bah%252BuqXA7NPQ6%252BvVUBl2O2Fufhv4lJCRtRN%252F4m2ayeA9hlw8%252BLYCxCz%252F976TNV3iI3wMN4dmE0n3Cnk12hyLeLFMR2J5e2pUTE%253D' alt='QR Code' width="200" height="200" /></a>					
				</div>	
			</div>
		</div>

<?php $this->stop('main_content') ?>
