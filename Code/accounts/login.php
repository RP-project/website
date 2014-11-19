<?php
	session_start();
	
	$_SESSION["login"]=$_POST["login"];
	$_SESSION["alerts"][0]=array(
		"type"=>"info",
		"msg"=>"Vous avez bien été connecté"
	);
	
	require("redirect.php");