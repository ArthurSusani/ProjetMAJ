

<?php $this->layout('layout', ['title' => 'Reservation']) ?>


<?php $this->start('main_content') ?>


<form action="<?= $this->url('booking_pay') ?>" method="post" accept-charset="utf-8">
	<label for="date_start">Arrivé le </label>
	<input type="text" name="date_start" id="datepicker_start" value="" placeholder="" >
	<label for="date_end">Depart le </label>
	<input type="text" name="date_end"	id="datepicker_end" value="" placeholder="" >

		<section>
			<h1>Plan de l'hotel</h1>
			<p id="nbRoomSelect">Vous avez selectionné 0 chambre</p>
			<img src="<?= $this->assetUrl('img/etage_0_homestyler_perso.png') ?>" alt="" usemap="#Map" />
			<map class="plan" name="Map" id="Map">
			<!-- haut de l'étage 0 -->
				<area  id="chambre0" alt="chambre0" shape="poly" coords="95,6,358,4,359,192,95,191" />
				<area  id="chambre1" alt="chambre1" shape="poly" coords="620,5,620,190,363,192,361,5" />
				<area  id="chambre2" alt="chambre2" shape="poly" coords="624,5,887,5,888,192,622,191" />
				<area  id="chambre3" alt="chambre3" shape="poly" coords="1152,4,1152,191,890,192,890,5" />
				<area  id="chambre4" alt="chambre4" shape="poly" coords="1155,4,1418,3,1417,192,1154,191" />
			<!--bas de l'étage 0-->
				<area  id="chambre5" alt="chambre5" shape="poly" coords="95,229,358,225,358,423,96,421" />
				<area  id="chambre6" alt="chambre6" shape="poly" coords="620,228,620,424,360,422,362,225" />
				<area  id="chambre7" alt="chambre7" shape="poly" coords="887,227,887,422,623,424,623,228" />
				<area  id="chambre8" alt="chambre8" shape="poly" coords="1154,422,1152,225,891,228,890,423" />
				<area  id="chambre9" alt="chambre9" shape="poly" coords="1417,227,1419,424,1156,421,1154,225" />
			</map>
			<select id="ascenseur">
				<option value="0">rez de chaussée</option>
				<option value="1">1er étage</option>
				<option value="2">2e étage</option>
				<option value="3">3e étage</option>
			</select>
			<p id="stageRoomSelect">Vous ètes au rez de chaussée</p>
		</section>
		<input type="hidden" name="data" value="">

	<button type="submit" id="submitMap">Confirmer</button>
</form>

<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript" charset="utf-8"></script>
<?php $this->stop('js') ?>
<?php $this->start('css') ?>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<?php $this->stop('css') ?>