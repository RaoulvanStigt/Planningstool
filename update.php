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

<?php include("dataLayer.php"); 
$games = getGamegepland($_GET['id'])
?>


<div class="formContainer">
	<form method="post" action= "updateSave.php">
		<input type="hidden" name="id" value="<?php echo $games["id"] ?>">
		<p>Games </p><input type="text" name="gameName" value="<?php echo $games["gameName"] ?>" required> *
		<p>Time </p><input type="time" name="Tijd" value="<?php echo $games["Tijd"] ?>" required> *
		<p>Explainer </p><input type="text" name="explainer" value="<?php echo $games["explainer"] ?>" required> *
		<p>Players </p><input type="text" name="players" value="<?php echo $games["players"] ?>" required> * <br><br>
		<button type="submit">Versturen</button>
	</form>
</div>