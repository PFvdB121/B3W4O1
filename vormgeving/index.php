<?php 
	require 'connection.php';
	require 'function.php';

	$result = createLink();

	$COUNT = getCOUNT();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>All characters</title>
	    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	</head>
	<body>
		<header><h1>Alle <?php echo $COUNT[0]; ?> characters uit de database</h1></header>
		<div id="container">
			<?php
				foreach ($result as $R) {
					$R['name'] = str_replace("\r\n", '', $R['name']);
			?>
			<a class="item" href="http://localhost/blok3/week4-5/B3W4O1/vormgeving/character.php?id=<?php echo $R['id']; ?>">
				<div class="left">
					<img class="avatar" alt="<?php echo $R['name']; ?>" src="resources/images/<?php echo $R['avatar']; ?>">
				</div>
				<div class="right">
					<h2><?php echo trim($R['name']); ?></h2>
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