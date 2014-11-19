<?php
	
	session_start();
	
	
	
	if(!isset($_SESSION["login"])) {
		
		if(isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["captcha_word"])) {
			
		}
	
	}
	header("Location:./../register-end.html");