<?php
	
require("dataLayer.php");
createPlanningGames($_POST);
header("Location: index.php");