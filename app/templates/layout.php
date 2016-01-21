<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
	<script src="<?= $this->assetUrl('js/plan.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
</head>
<body>
	<div class="container">
		<nav>
<<<<<<< HEAD

=======
			<ul>
				<?php if (isset($_SESSION['user'])): ?>
						
						<li class="col-sm-3 col-md-offset-6"><a href="<?= $this->url('log_disconnect') ?>">Deconnection</a></li>
						<?php if ($_SESSION['role'] == "admin"): ?>
						<li class="col-sm-3" ><a href="<?= $this->url('log_disconnect') ?>">Configuration</a></li>	
						<?php endif; ?>	
						<?php else: ?>
					<li class="col-sm-3 col-md-offset-6"><a href="<?= $this->url('log_register') ?>">S'enregistrer</a></li>
					<li class="col-sm-3"><a href="<?= $this->url('log_connect') ?>">Se connecter</a></li>
				

				<?php endif; ?>
			</ul>
>>>>>>> 14c492a514d87cc79a5cb5ce21ccd3cd684f593a

			<ul class="list-inline">
				<li class="col-sm-3"><a href="<?=  $this->url('home') ?>">Accueil</a></li>
				<li class="col-sm-3"><a href="<?=  $this->url('introduct_index') ?>">Présentation</a></li>
				<li class="col-sm-3"><a href="<?=  $this->url('booking_index') ?>">Réservation</a></li>
				<li class="col-sm-3"><a href="<?=  $this->url('log_register') ?>">Inscription</a></li>
			</ul>
		</nav>
		<header>
		<hr>
			<h2><?= $this->e($title) ?></h2>
			<hr>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>