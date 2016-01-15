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
			<?php
				echo "<h3>".$rooms[0]['name']."</h3>";
				echo"<img src='".$rooms[0]['picture']."'width='500' height='300'><p></p></figure>";
			?>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p> Prix :
				<?php
					echo $rooms[0]['price']
				?>
				€/nuit</p>
		</div>
	</div>
</body>
</html>