

<?php $this->layout('layout', ['title' => 'Reservation de votre chambre']) ?>


<?php $this->start('main_content') ?>


<form action="<?= $this->url('booking_pay') ?>" method="post" accept-charset="utf-8">
	<label for="date_start">Arrivé le </label>
	<input type="text" name="date_start" id="datepicker_start" value="" placeholder="" >
	<label for="date_end">Depart le </label>
	<input type="text" name="date_end"	id="datepicker_end" value="" placeholder="" >

		<section>
			<h1>Plan de l'hotel Webforce3</h1>			
			<p id="map_legend_title"><b>LEGENDE</b>: Les chambres déja réservées sont marquées en <b>rouge</b></p>
			<div id="legend_locked">				
			</div>
			<p id="legend_locked_p">Chambre(s) déja réservée(s) par un autre client</p>
			<div class="clearfix">				
			</div>
			<div id="legend_booked">			
			</div>
			<p id="legend_booked_p">Chambre(s) que vous avez sélectionnée(s)</p>
			<div class="clearfix">
			</div>
			<p id="book_stat">Il y a un actuellement <b><?= $nb_booked_room?></b> chambre(s) réservée(s) sur <b><?= $nb_room?></b> chambres disponibles</p> 
			<p id="nbRoomSelect">Vous avez selectionné 0 chambre</p>
			<div class="plan">
				<div class="chambre" id="n0">
				</div>
				<div class="chambre" id="n1">
				</div>
				<div class="chambre" id="n2">
				</div>
				<div class="chambre" id="n3">
				</div>
				<div class="chambre" id="n4">
				</div>
				<div class="chambre" id="n5">
				</div>
				<div class="chambre" id="n6">
				</div>
				<div class="chambre" id="n7">
				</div>
				<div class="chambre" id="n8">
				</div>
				<div class="chambre" id="n9">
				</div>				
			</div>
			<select id="ascenseur">
				<option value="0">rez de chaussée</option>
				<option value="1">1er étage</option>
				<option value="2">2e étage</option>
				<option value="3">3e étage</option>
			</select>
			<p id="stageRoomSelect">Vous ètes au rez de chaussée</p>
		</section>
		<input type="hidden" name="data" value="">
		<input id="str_tab_booked_room" type="hidden" name="tab_booked_room" value="<?= $tableau_booked_room ?>">

	<button type="submit" id="submitMap">Confirmer</button>
	<button type="submit" id="submitMapAjax">Envoi Ajax</button>
</form>

<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="ajax.js" type="text/javascript"></script>

<?php $this->stop('js') ?>
<?php $this->start('css') ?>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<?php $this->stop('css') ?>