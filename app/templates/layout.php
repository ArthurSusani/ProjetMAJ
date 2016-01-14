<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="<?= $this->assetUrl('js/script.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
</head>
<body>
	<div class="container">
		<nav>
			<ul>
				<li><a href="<?=  $this->url('home') ?>">Accueil</a></li>
				<li><a href="<?=  $this->url('introduct_index') ?>">Présentation</a></li>
				<li><a href="<?=  $this->url('booking_index') ?>">Réservation</a></li>
				<li><a href="<?=  $this->url('log_register') ?>">Inscription</a></li>
			</ul>
		</nav>
		<header>
			<h1><?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>