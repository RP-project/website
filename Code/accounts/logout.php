<?php
	session_start();
	
	$_SESSION=array();
	
	require("../includes/alerts.php");
	msg("Vous avez bien été déconnecté","info");
	
	require("../misc/redirect.php");