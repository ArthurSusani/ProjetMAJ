<?php
	require_once '../inc/function.php';
	$rooms=getAllRooms($pdo);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div id="booking">
		<h2>Réservation<h2>
		<form action="reservation_submit" method="get" accept-charset="utf-8">
			Chambre : <select name="room">
				<?php 
					echo "<option value='0'>Chambre</option>";
					foreach ($rooms as $ro) {
						echo "<option value='"
						.$ro['id']."'>"
						.$ro['name']
						."</option>";
					}
				?>
			</select>
			Début : <input type="date" name="begin" value="" placeholder="Début">
			Fin : <input type="date" name="end" value="" placeholder="Fin">
		</form>
	</div>
</body>
</html>