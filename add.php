<style>
body {
	background-color: lightgrey;
}
.formContainer{
	background-color: white;
  	width: 75%;
  	margin: 0 auto;
}

</style>

<?php include("dataLayer.php"); ?>

<div class="formContainer">
	<form method="post" action= "save.php">
		<p>Game</p><select type="text" name="gamename" required> *<?php
		    $games = getGames();
			foreach($games as $game){ ?>
		    <option value="<?php echo $game['name'];?>"> <?php
		    		printf("<h3>%s</h3>", $game["name"]);
				}; ?>
			</option>
	  	</select>
		<p>Time </p><input type="time" name="Tijd" required> *
		<p>Explainer </p><input type="text" name="explainer" required> *
		<p>Players </p><input type="text" name="players" required> * <br><br>
		<input type="submit" name="Versturen">
	</form>
</div>