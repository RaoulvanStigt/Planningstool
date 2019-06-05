<div class="games">
	<?php
		require("dataLayer.php");
		$game = getGame($_GET["id"]);
		printf("<h2>%s</h2>", $game["name"]);
		printf("<p><b>Spelers:</b> %u - %u</p>", $game["min_players"], $game["max_players"]);
		printf("<p><b>Speeltijd:</b> %s minuten</p>",$game["play_minutes"]);
		printf("<p><b>Uitlegtijd:</b> %s minuten</p>",$game["explain_minutes"]);
		echo '<img src="img/'.$game["image"].'"/>';
		printf("<p><b>Beschrijving:</b> %s</p>", $game["description"]);
		echo $game["youtube"];
		printf("<p><b>Link:</b> %s</p>", $game["url"]);
	?>
</div>