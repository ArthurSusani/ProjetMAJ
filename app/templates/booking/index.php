<?php $this->layout('layout', ['title' => 'Réservation en ligne']) ?>

<?php $this->start('main_content') ?>
	
	
	<div class="wallpaper">
	</div>
	<p>
		Bienvenue dans notre système de reservation en ligne !
		<?php

			if(isset($_SESSION['user']['role'])){ // user deconnecté 

				$url =  $this->url('booking_map');
				echo "Pour continuer vers la reservation cliquez sur". "<a href='$url' title='Reservation'> Réservation </a>";
			}else{ 
				$url =  $this->url('log_register');
				echo "Il est nécessaire d'être connecté pour accéder au service réservation.";
				echo "<ul><li>Si vous n'êtes pas inscrit :<a href='$url' title='Inscription'> Inscription </a></p></li>";
				$url2= $this->url('log_connect');
				echo "<li>Pour vous connectez :<a href='$url2' title='Inscription'> Connexion </a></li></ul>";
			}
		?>
		</p>
<?php $this->stop('main_content') ?>
