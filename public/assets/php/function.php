<?php
	$strConnection = 'mysql:host=localhost;dbname=projethotel;charset=utf8';
	$pdo = new PDO($strConnection, 'root', 'webforcesql');

	function getAllRooms($pdo) {
	 	$sql="SELECT id, name, floor, capacity, singlebed, doublebed, price, picture FROM rooms";
		$pdoPrepare = $pdo->prepare($sql);
		$pdoPrepare->execute();
		return $pdoPrepare->fetchAll(PDO::FETCH_ASSOC);
 	}