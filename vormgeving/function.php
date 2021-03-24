<?php
	function createLink(){
		$conn = createConnection();
		$sql = 'SELECT id, name, avatar, health, attack, defense, weapon, armor FROM characters ORDER BY name';
		$sth = $conn->prepare($sql);
		$sth->execute();
		$result = $sth->fetchAll();
		return $result;
	}

	function getCOUNT(){
		$conn = createConnection();
		$sqlCOUNT = 'SELECT COUNT(*) FROM characters';
		$sthCOUNT = $conn->prepare($sqlCOUNT);
		$sthCOUNT->execute();
		$COUNT = $sthCOUNT->fetch();
		return $COUNT;
	}

	function getCharacter($id){
		$conn = createConnection();
		$sql = 'SELECT * FROM characters WHERE id = :id';
		$sth = $conn->prepare($sql);
		$sth->bindParam(':id', $id);
		$sth->execute();
		$result = $sth->fetch();
		return $result;
	}
?>