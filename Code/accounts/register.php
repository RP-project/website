<?php
	
	session_start();
	
	if(!isset($_SESSION["login"])) {
	
		$_SESSION["login"]=$_POST["login"];
		
		$_SESSION["justRegistred"]=true;
	
	}
	header("Location:./../register-end.html");