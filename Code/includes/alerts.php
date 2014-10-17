<?php
	
	function dispInfo($info) {
		echo('<div class="info">');
		echo('<h3>Information</h3>');
		echo($info);
		echo('</div>');
	}
	
	function dispError($error) {
		echo('<div class="error">');
		echo('<h3>Erreur</h3>');
		echo($error);
		echo('</div>');
	}