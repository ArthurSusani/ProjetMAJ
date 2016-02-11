<?php 
	require_once '../inc/function.php';
	$rooms=getAllRooms($pdo);
	include '../inc/header.php';
?>
	<div id="rooms">
		<h2>Les chambres</h2>
		<nav>
			<ul>
				<li>Séléctionner une chambre :</li><br>
				<span class="glyphicon glyphicon-king"></span><li><a href="chambre_roi.php" title="">Chambre du roi</a></li>
				<span class="glyphicon glyphicon-queen"></span><li><a href="chambre_dame.php" title="">Chambre de la dame</a></li>
				<span class="glyphicon glyphicon-bishop"></span><li><a href="chambre_fou.php" title="">Chambre du fou</a></li>
				<span class="glyphicon glyphicon-knight"></span><li><a href="chambre_cavalier.php" title="">Chambre du cavalier</a></li>
				<span class="glyphicon glyphicon-tower"></span><li><a href="chambre_tour.php" title="">Chambre de la tour</a></li>
			</ul>
		</nav>
		<div class="chambre">
			<p>Services proposés :</p>
			<ul>
				<li><img src="../img/telephone.jpg" alt="" width="100" height="100">
				<p>Télèphone</p></li>

				<li><img src="../img/telesat.jpg" alt="" width="100" height="100">
				<p>Télèvision satellite</p></li>

				<li><img src="../img/wifi.jpg" alt="" width="100" height="100">
				<p>Wi-Fi</p></li>

				<li><img src="../img/bath.jpg" alt="" width="100" height="100">
				<p>Bain/douche</p></li>
			</ul>
		</div>
	</div>
<?php 
	include '../inc/footer.php'
?>