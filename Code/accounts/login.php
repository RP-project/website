<?php
	session_start();
	
	$_SESSION["login"]=$_POST["login"];
	
	require("redirect.php");