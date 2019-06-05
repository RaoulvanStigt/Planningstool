<!DOCTYPE html>
<html lang="en">
<head>
	<title>Planningstool</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<h1>Planning Games</h1>
	<li><a href="add.php">VOEG EEN GAME TOE</a></li>
	
	<?php
		require("dataLayer.php");
	?>

	<h2>Geplande Games </h2>
	<?php
		foreach(selectPlanning() as $array){
			?> <div class="geplandGame"> 
			<?php
			echo " <b>Spel:</b> ". $array['gameName']."<br> <b>Tijd:</b> ". $array['Tijd']."<br> <b>Uitlegger:</b>  ".$array['explainer']."<br> <b>Spelers:</b>  ".$array['players']. "<br>";

		?>
		<a href="update.php?id=<?php echo $array['id'] ?>">Wijzigen</a>
		<a href="deleteConfirm.php?id=<?php echo $array['id'] ?>">Delete</a></br>

		<?php
		echo '<br>';
		?> </div><?php
		};
		$games = getGames();
	?>

	<h2>Alle Games</h2>
	<?php
		foreach($games as $game){
			?>
			<div class="imageTitle">
			<?php printf("<h3>%s</h3>", $game["name"]);?>
			<a href="gameInfo.php?id=<?php echo $game['id']; ?>/"><img href="gameInfo.php?id=<?php echo $game['id']; ?>/" src="img/<?php echo $game['image']; ?>"/></a>
			</div>
		<?php }; ?>
</div>

</body>
</html>