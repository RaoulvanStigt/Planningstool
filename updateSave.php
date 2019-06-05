<?php 

require("dataLayer.php");
updatePlanning($_POST);
header("Location: index.php");