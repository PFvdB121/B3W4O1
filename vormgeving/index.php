<?php 
	require 'connection.php';
	$sqlCOUNT = 'SELECT COUNT(*) FROM characters';
	$sthCOUNT = $conn->prepare($sqlCOUNT);
	$sthCOUNT->execute();
	$COUNT = $sthCOUNT->fetch();

	$index = 0;
?>
<!DOCTYPE html>
	<html>
	<head>
	    <meta charset="utf-8">
	    <title>All characters</title>
	    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body>
		<header><h1>Alle <?php echo $COUNT[0]; ?></h1></header>
		<div id="container">
			<?php
				foreach ($result as $R) {
			?>
			<a class="item" href="http://localhost/blok3/week4-5/B3W4O1/vormgeving/character.php?index=<?php echo $index; ?>">
				<div class="left">
					<img class="avatar" src="resources/images/<?php echo $R['avatar']; ?>">
				</div>
				<div class="right">
					<h2><?php echo $R['name']; ?></h2>
					<div class="stats">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $R['health']; ?></li>
							<li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $R['attack']; ?></li>
							<li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $R['defense']; ?></li>
						</ul>
					</div>
				</div>
				<div class="detailbutton"><i class="fas fa-search"></i> bekijk</div>
			</a>
			<?php
				$index++;
				}
			?>
		</div>
		<?php
			include 'footer.php';
		?>
	</body>
</html>