<?php $this->layout('layout', ['title' => 'Reservation']) ?>

<?php $this->start('main_content') ?>
	<h2>Réservation ici </h2>
	
	<div class="wallpaper">
	</div>
	<p>
		blablabla bla blabla blabla bla blablabla !
		<?php
			if(isset($_SESSION['user']['role'])){ // user deconnecter 
				$url =  $this->url('booking_map');
				echo "blablabla USER CONNECT ". "<a href='$url' title='Reservation'> Réservation </a>" ." blablabla";
			}else{ 
				$url =  $this->url('log_register');
				echo "<a href='$url' title='Inscription'> Inscription </a></p>";
				$url2= $this->url('log_connect');
				echo "<p>blablabla USER NOT CONNECT ". "<a href='$url2' title='Inscription'> Connection </a>";
			}

		?>
		</p>
<?php $this->stop('main_content') ?>
