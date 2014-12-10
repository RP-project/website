<?php
	session_start();
	
	require("../includes/alerts.php");
	require("../includes/MySQLConfig.php");
	require("../includes/MySQL.php");
	require("functions.php");
	
	if($user=getAccountByLogin($_POST["login"])) {
	
		if($user["password"]==cryptPassword($_POST["password"])) {
			$_SESSION=$user;
			msg("Bienvenue, ".$user["login"],"info");
		} else {
			msg("Mot de passe incorrect");
		}
		
	} else {
		msg("L'utilisateur associé à cet identifiant n'existe pas");
	}
	
	
	require("../misc/redirect.php");