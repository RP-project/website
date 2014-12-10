<?php
function msg($msg,$type="error") {
	$_SESSION["alerts"][]=array(
		"type"=>$type,
		"msg"=>$msg
	);
}