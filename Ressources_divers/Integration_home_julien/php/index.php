<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Webforce 3</title>
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="../js/javascript.js" type="text/javascript" charset="utf-8" async defer></script>
	
</head>
<body>
	<!-- Layout type : container -->
	<nav>
		<div class="container">

			<a href="" title=""><img src="../img/logo.png" alt="Logo de la Webforce 3" width="199" height="53" /></a>
			<ul>
				<li><a href="#accueil" title="">accueil</a></li>
				<li><a href="#programme" title="">programme</a></li>
				<li><a href="#inscriptions" title="">inscriptions</a></li>
			</ul>

		</div>
	</nav>

	<div class="clearfix"></div>

	<header id="accueil">
		<div class="container">

			<p>
				Bienvenue sur  le site de <strong>WebForce 3 !</strong> 
				Si vous aussi vous souhaitez devenir développeur web, 
				inscrivez-vous dès maintenant !
			</p>

			<a href="#inscriptions" >inscriptions</a>

		</div>
	</header>

	<div class="clearfix"></div>

	<section id="programme">
		<div class="container">

			<h2>le programme</h2>

			<p>
				Le programme de formation est intensif et représente <strong>490 heures de formation</strong>.
			</p>
			
			<!-- Chaque article contient une image, un titre, et du texte 
				Le choix du empasize <em> est prit pour l'apport d'information qu'il apporte au texte .
				Et NON par faineantise pûre au niveau du CSS et de l'italique
			-->

			<article>

				<img src="../img/html5-wf3.png" alt="Logo de" width="121" height="171" />
				<h3>html5</h3>
				<p>
					L’<em>Hypertext Markup Language</em>, 
					est le format de données conçu pour représenter les pages web.
				</p>

			</article>

			<article>

				<img src="../img/css3-wf3.png" alt="Logo de" width="122" height="171" />
				<h3>css3</h3>
				<p>
					Le CSS, de l’anglais <em>Cascading Style Sheets</em>,
					décrit la présentation des documents HTML et XML.
				</p>

			</article>

			<article>

				<img src="../img/php-wf3.png" alt="Logo de" width="163" height="86" />
				<h3>php</h3>
				<p>
					<em>PHP Hypertext Preprocessor</em> est un langage 
					de programmation utilisé pour produire des pages Web dynamiques.
				</p>

			</article>

			<article>

				<img src="../img/wp-wf3.png" alt="Logo de" width="168" height="170" />
				<h3>wordpress</h3>
				<p>
					WordPress est surtout utilisé comme moteur de blog, 
					mais ses fonctionnalités lui permettent de <em>gérer n'importe quel site web</em>.
				</p>

			</article>

		</div>
	</section>

	<div class="clearfix"></div>

	<section id="inscriptions">
		<div class="container">
			
			<h2>inscriptions</h2>

			<p>
				Si vous souhaitez vous inscrire pour la prochaine session de Webforce 3, 
				remplissez le formulaire suivant :
			</p>

			<form action="#" method="POST" accept-charset="utf-8">

				<label>votre nom <span>*</span>
					<input type="text" name="name" placeholder="Ex: John Doe">
					<p>ce champ ne doit pas être vide !</p>
				</label>

				<label>votre email <span>*</span>
					<input type="mail" name="email" placeholder="Ex: john.doe@wf3.fr">
					<p>ce champ ne doit pas être vide !</p>

				</label>

				<label>votre message <span>*</span>
					<textarea name="message">Bonjour...</textarea>
					<p>ce champ ne doit pas être vide !</p>
				</label>
				<button type="submit" name="submit">Envoyer</button>
			</form>
		</div>
	</section>

	<div class="clearfix"></div>

	<footer>
		<a href="#">Retour en haut</a>
		<div class="container">
			<p>©2015 - WebForce 3 ®</p>
		</div>
	</footer>

	<div class="clearfix"></div>

</body>
</html>