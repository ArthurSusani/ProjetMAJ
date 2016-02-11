

<?php $this->layout('layout', ['title' => 'Reservation de votre chambre']) ?>


<?php $this->start('main_content') ?>



<form id="submitBookRoom" action="<?= $this->url('booking_pay') ?>" method="post" accept-charset="utf-8">
	<p>Veuillez sélectionnez ci-dessous une date de début et de fin de séjour:</p>
	<label for="date_start">Arrivé le </label>
	<input required type="text" name="date_start" id="datepicker_start" value="" placeholder="" >
	<label for="date_end">Depart le </label>
	<input required type="text" name="date_end"	id="datepicker_end" value="" placeholder="" >
	<div class="clearfix"></div>
	<h3>1) Cliquez sur le bouton ci-dessous pour afficher les réservations entre ces 2 dates</h3>


	<button type="button" id="ButtonGetDateBooking"><b>Afficher</b></button>
		<section>
			<h3>2) ensuite sélectionnez la ou les chambres désirées sur le plan ce dessous</h3>
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
			<p id="book_stat">Il y a dans le créneau sélectionné <b><span id="booked_room_number_datepicker"></span></b> chambre(s) réservée(s) sur <b><?= $nb_room?></b> chambres disponibles</p>
			<p >Les numéros de chambres actuellement occuppées sur le créneau: <span id="booked_room_datepicker"><b></b></span></p>
			<p id="nbRoomSelect">Vous avez selectionné 0 chambre</p>
			<p id="selectedRoomText">Chambre(s) choisie(s): <span id="SpanSelectedRoom"></span></p>
			<div class="plan">
				<div class="chambre" id="n0">
				<p>N°1 107€</p>
				</div>
				<div class="chambre" id="n1">
				<p>N°2 150€</p>
				</div>
				<div class="chambre" id="n2">
				<p>N°3 89€</p>
				</div>
				<div class="chambre" id="n3">
				<p>N°4 58€</p>
				</div>
				<div class="chambre" id="n4">
				<p>N°5 170€</p>
				</div>
				<div class="chambre" id="n5">
				<p>N°6 107€</p>
				</div>
				<div class="chambre" id="n6">
				<p>N°7 150€</p>
				</div>
				<div class="chambre" id="n7">
				<p>N°8 89€</p>
				</div>
				<div class="chambre" id="n8">
				<p>N°9 58€</p>
				</div>
				<div class="chambre" id="n9">
				<p>N°10 200€</p>
				</div>				
			</div>

		</section>
		<input type="hidden" name="data" value="">
		<!-- champ input caché pour stocker les chambré sélectionnées par le client -->
		<input id="input_client_selected_room" type="hidden" name="client_selected_room" value="">

	<button type="submit" id="submitMap">Confirmer</button>
	
</form>

<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="<?= $this->assetUrl('js/plan.js') ?>" type="text/javascript"></script>
  <script src="<?= $this->assetUrl('js/ajax.js') ?>" type="text/javascript"></script>
<?php $this->stop('js') ?>
<?php $this->start('css') ?>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<?php $this->stop('css') ?>