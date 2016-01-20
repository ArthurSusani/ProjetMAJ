<?php $this->layout('layout', ['title' => 'Reservation']) ?>

<?php $this->start('main_content') ?>
	<h2>Réservation ici </h2>
	
	<div class="wallpaper">
	</div>
	<p>
		blablabla bla blabla blabla bla blablabla !
		<?php

			
			if(isset($_SESSION['role'])){ // user deconnecter 
				$url =  $this->url('booking_map');
				echo "blablabla USER CONNECT ". "<a href='$url' title='Reservation'> BLABLA </a>" ." blablabla";
			}else{ 
				$url =  $this->url('log_register');
				echo "blablabla USER NOT CONNECT ". "<a href='$url' title='Inscription'> BLABLA </a>" ." blablabla";
			}
			
		?>
		</p>
<?php $this->stop('main_content') ?>
