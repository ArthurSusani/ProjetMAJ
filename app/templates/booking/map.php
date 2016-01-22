<?php $this->layout('layout', ['title' => 'Reservation']) ?>

<?php $this->start('main_content') ?>

<form action="<?= $this->url('booking_pay') ?>" method="post" accept-charset="utf-8">
	<label for="date_start">Arrivé le </label>
	<input type="date" name="date_start" value="" placeholder="">
	<label for="date_end">Depart le </label>
	<input type="date" name="date_end"	 value="" placeholder="">

		<section>
			<h1>Plan de l'hotel</h1>
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

	<button type="submit" id="submitMap">Confirmer</button>
</form>

<?php $this->stop('main_content') ?>