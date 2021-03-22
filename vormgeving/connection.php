<?php
	try{
		$conn = new PDO('mysql:host=localhost;dbname=databank_php', 'root', 'mysql');
	} catch (PDOException $e) {
		print("Error!: " . $e->getMessage() . "<br>");
		die();
	}
	$sql = 'SELECT * FROM characters ORDER BY name';
	$sth = $conn->prepare($sql);
	$sth->execute();
	$result = $sth->fetchAll();
?>