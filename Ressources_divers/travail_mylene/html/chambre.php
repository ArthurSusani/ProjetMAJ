<?php 
	require_once '../inc/function.php';
	$rooms=getAllRooms($pdo);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chambres</title>
	<link rel="stylesheet" href="../css/chambre.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id="rooms">
		<h2>Les chambres</h2>
		<nav>
			<ul>
				<li>Séléctionner une chambre</li><br>
				<li><a href="chambre_roi.php" title="">Chambre du roi</a></li>
				<li><a href="chambre_dame.php" title="">Chambre de la dame</a></li>
				<li><a href="chambre_fou.php" title="">Chambre du fou</a></li>
				<li><a href="chambre_cavalier.php" title="">Chambre du cavalier</a></li>
				<li><a href="chambre_tour.php" title="">Chambre de la tour</a></li>
			</ul>
		</nav>
		<div class="chambre">
		<p>Services proposés :</p>
			<div class="service">
				<img src="../img/telephone.jpg" alt="" width="100" height="100">
				<p>Télèphone</p>
			</div>
			<div class="service">
				<img src="../img/telesat.jpg" alt="" width="100" height="100">
				<p>Télèvision satellite</p>
			</div>
			<div class="service">
				<img src="../img/wifi.jpg" alt="" width="100" height="100">
				<p>Wi-Fi</p>
			</div>
			<div class="service">
				<img src="../img/bath.jpg" alt="" width="100" height="100">
				<p>Bain/douche</p>
			</div>
			<div class="service">
				<img src="../img/roomservice.jpg" alt="" width="100" height="100">
				<p>Room service</p>
			</div>
		</div>
	</div>
</body>
</html>