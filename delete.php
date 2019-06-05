<?php 

require("dataLayer.php");
deletePlanning($_GET['id']);
header("Location: index.php");
