<?php 
	require 'connection.php'; 
	require 'function.php';
	if (isset($_GET['id'])) {
		$person_id = htmlspecialchars($_GET['id']);
	}
	else{
		$person_id = 0;
	}
	$result = getCharacter($person_id);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Character - <?php echo $result['name']?></title>
		<link rel="stylesheet" type="text/css" href="resources/css/style.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body>
		<header>
			<h1><?php echo $result['name']?></h1>
			<a class="backbutton" href="http://localhost/blok3/week4-5/B3W4O1/vormgeving/index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a>
		</header>
		<div id="container">
			<div class="detail">
				<div class="left">
					<img class="avatar" alt="<?php echo $result['name'] ?>" src="resources/images/<?php echo $result['avatar']; ?>">
					<div class="stats" style="background-color: <?php echo $result['color'];?>">
						<ul class="fa-ul">
							<li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $result['health'];?></li>
							<li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $result['attack'];?></li>
							<li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $result['defense'];?></li>
						</ul>
						<ul class="gear">
							<li><b>Weapon</b>: <?php echo $result['weapon']; ?></li>
							<li><b>Armor</b>: <?php echo $result['armor']; ?></li>
						</ul>
					</div>
				</div>
				<div class="right">
					<p>
						<?php echo nl2br($result['bio']); ?>
					</p>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<?php
			include 'footer.php';
		?>
	</body>
</html>