<?php
	session_start();
	
	$_SESSION=Array();
	
	session_destroy();
	
	require("redirect.php");