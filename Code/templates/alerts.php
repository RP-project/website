<?php
if(isset($_SESSION["alerts"])) {
	foreach($_SESSION["alerts"] as $alert) {
		echo('<div class="alert '.$alert["type"].'" onclick="removeE(this)">');
		echo($alert["msg"]);
		echo('</div>');
	}
	unset($_SESSION["alerts"]);
}