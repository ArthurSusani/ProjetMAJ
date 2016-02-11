<?php 
	require_once '../inc/function.php'
?>	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Hotel Gestion</title>
		<link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:500' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/chambre.css">
		<link rel="stylesheet" href="../css/presentation.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" href="../css/contact.css">
		<link rel="stylesheet" href="../css/jquery.fancybox.css" type="text/css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/javascript.js" type="text/javascript" charset="utf-8" async defer></script>
		<script src="../js/jquery.flexslider.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/script.js" type="text/javascript" charset="utf-8" async defer></script>
		<script type="text/javascript" src="../js/jquery.fancybox.pack.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script src="../js/googlemaps.js"></script>

	</head>
	<body>
		<header>
			<div id="menu1">
				<nav>
					<!-- affichage du logo, cela décale tout si je l'affiche -->
					<!-- <a href="" title=""><img src="../img/logo-chrome.png" alt="Logo hotel" width="100" height="100" /></a> -->
					<!-- début du premier menu de navigation en haut a droite -->
					<ul> 
						<li><a href="<?= $this->url('log_register') ?>" title="">
						<span class="glyphicon glyphicon-pencil"></span>
						Inscription</a></li>
						<li><a href="<?= $this->url('log_connect') ?>" title="">
						<span class="glyphicon glyphicon-off"></span>Connexion</a></li>
						<li><a href="#langages" title="">Langue</a></li>
					</ul>
				</nav>
			</div>	
		
			<div id="menu2">
				<nav>
					<!-- 2ème barre de navigation -->
					<ul>
						<li><a href="<?=  $this->url('home') ?>" title="Accueil">Accueil</a></li>
						<!-- code pour faire un petit menu déroulant avec bootstrap -->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="<?=  $this->url('introduct_index') ?>">Présentation<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="presentation.php">Notre hôtel</a></li>
								<li><a href="chambre.php">Nos chambres</a></li>
							</ul>
						</li>
						<!-- fin d'un menu déroulant avec bootstrap -->
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="<?=  $this->url('booking_index') ?>">Réservation<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Par internet</a></li>
								<li><a href="#">Par téléphone</a></li>
							</ul>
						</li>
						<li><a href="" title="Avis"><span class="glyphicon glyphicon-comment"></span>Avis</a></li>
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">A propos<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="contact.php">Contact</a></li>
								<li><a href="about.php">Qui sommes nous</a></li>
							</ul>
						</li>				
					</ul>
				</nav>
			</div>
			<h2><?= $this->e($title) ?></h2>
			<hr>
		</header>
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
</body>
</html>

		<div class="clearfix"></div>