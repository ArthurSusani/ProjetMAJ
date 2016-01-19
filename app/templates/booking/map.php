<?php $this->layout('layout', ['title' => 'Reservation']) ?>

<?php $this->start('main_content') ?>

<form action="<?= $this->url('booking_pay') ?>" method="post" accept-charset="utf-8">
	<input type="date" name="date_start" value="" placeholder="">
	<input type="date" name="date_end"	 value="" placeholder="">
	<input type="text" name="number" value="" placeholder="">
	
	<button type="submit">Confirmer</button>
</form>

<?php $this->stop('main_content') ?>