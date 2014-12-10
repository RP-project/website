<?php
	
	session_start();
	
	
	require("../includes/alerts.php");
	require("../includes/MySQLConfig.php");
	require("../includes/MySQL.php");
	require("functions.php");
	
	if(!isset($_SESSION["login"])) {
		
		if(isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["captcha_word"]) && !empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["captcha_word"])) {
			
			if($_POST["captcha_word"]==$_SESSION["captcha_word"]) {
				
				if(!getAccountByLogin($_POST["login"])) {
					
					if($_POST["password"]==$_POST["rpassword"]) {
					
						insertUser($_POST["login"],$_POST["password"]);
						$_SESSION["justRegistred"]=true;
						header("Location:./../register_end.html");
					
					} else {
						msg("Vous n'avez pas saisi 2 fois le même mot de passe");
					}
					
				} else {
					msg("L'indentifiant que vous avez demandé est déjà utilisé");
				}
				
			} else {
				msg("Le captcha n'est pas correct");
			}
			
		} else {
			msg("Vous n'avez pas renseigné toutes les informations requises");
		}
	
	} else {
		msg("Vous ne pouvez pas vous inscrire en étant déjà connecté");
	}
	
	if(!$_SESSION["justRegistred"])
		header("Location:./../register.html");