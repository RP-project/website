<?php
	
	$redirectPage="./../";
	if($_SERVER["HTTP_REFERER"])
		$redirectPage=$_SERVER["HTTP_REFERER"];
	header("location:".$redirectPage);