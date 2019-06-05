<?php
include("header.php");
include("dataLayer.php");
$game = getGamegepland($_GET["id"]);

?>
<div class="container">
  <h1>Game verwijderen</h1>
   <form action="delete.php?id=<?php echo $game['id']; ?>" method="post">
        <h4>Weet u zeker dat u <?php echo $game['gameName'] ?> verwijderen?</h4>
        <button class="btn btn-primary" >Ja, verwijder dit spel</button>
    </form>
    <br>
    <a href="index.php">Nee, ga terug</a>
</div>