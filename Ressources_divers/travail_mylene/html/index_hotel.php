<?php
	include '../inc/header.php';
?>
		<!-- Layout type : container -->

	<header>
			<div id="menu1">
			<nav>
				<!-- affichage du logo, cela décale tout si je l'affiche -->
				<!-- <a href="" title=""><img src="../img/logo-chrome.png" alt="Logo hotel" width="100" height="100" /></a> -->
				<!-- début du premier menu de navigation en haut a droite -->
				<ul> 
					<li><a href="#inscription" title="">
					<span class="glyphicon glyphicon-pencil"></span>
					Inscription</a></li>
					<li><a href="#connexion" title="">
					<span class="glyphicon glyphicon-off"></span>Connexion</a></li>
					<li><a href="#langages" title="">Langue</a></li>
				</ul>
			</nav>
			</div>
		
		
			<div id="menu2">
			<nav>
				<!-- 2ème barre de navigation -->
				<ul>
					<li><a href="" title="Accueil">Accueil</a></li>
					<!-- code pour faire un petit menu déroulant avec bootstrap -->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Présentation<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="presentation.php">Notre hôtel</a></li>
							<li><a href="chambre.php">Nos chambres</a></li>
						</ul>
					</li>
					<!-- fin d'un menu déroulant avec bootstrap -->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Réservation<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Par internet</a></li>
							<li><a href="#">Par téléphone</a></li>
						</ul>
					</li>
					<li><a href="" title="Avis"><span class="glyphicon glyphicon-comment"></span>Avis</a></li>
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">A propos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Contact</a></li>
							<li><a href="#">Qui sommes nous</a></li>
						</ul>
					</li>				
				</ul>
				</nav>
		</div>
		</header>

		<div class="clearfix"></div>

		
		<div class="container">
			<div id="accueil">

				<p>Bienvenue sur le site de l'hotel webforce3<br>
				Pour réserver une chambre merci de bien vouloir créer un compte !</p>

				<a href="#inscriptions" >Inscription</a>
			</div>
		
			<div id="map">
				<script>
					google.maps.event.addDomListener(window, 'load', initMap);
				</script>
			</div>
			<div id="adresse">
				<p>Hôtel WebForce 3<p>
				<p>6 Rue Gino Raimondi<p>
				<p>Piennes, Lorraine<p>
			</div>
		</div>
		<!--<div id="flexsider">
			<ul class="slides">
				<p></p>
				<li><a class="fancybox" href="../img/hotel_front.jpg" title="">
					<img src="../img/hotel_front.jpg" alt="" width="600" height="400"/>
				</a></li>
				<li><a class="fancybox" href="../img/hotel_lobby.jpg" title="">
					<img src="../img/hotel_lobby.jpg" alt="" width="600" height="400"/>
				</a></li>
				<li><a class="fancybox" href="../img/hotel_restaurant.jpg" title="">
					<img src="../img/hotel_restaurant.jpg" alt="" width="600" height="400"/>
				</a></li>
			</ul>
		</div>-->

<?php
	include '../inc/footer.php';
?>
