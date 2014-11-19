<?php
	session_start();
	
	$_SESSION=array(
		"alerts"=>array(array(
			"type"=>"info",
			"msg"=>"Vous avez bien été déconnecté"
		))
	);
	
	require("redirect.php");