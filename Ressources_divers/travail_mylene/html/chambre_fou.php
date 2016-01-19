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
			<?php
				echo "<h3>".$rooms[2]['name']."</h3>";
				echo"<img src='".$rooms[2]['picture']."'width='500' height='300'><p></p></figure>";
			?>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p> Prix :
				<?php
					echo $rooms[2]['price']
				?>
				€/nuit </p>
		</div>
	</div>
</body>
</html>