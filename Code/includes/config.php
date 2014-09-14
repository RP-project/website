<?php

require(ABSPATH.'includes/config/general.php');

if(DB_TYPE="MySQL") {
	require(ABSPATH.'includes/config/MySQL.php');
	// require(ABSPATH.'includes/MySQL/');
}
if(DB_TYPE="file_DDB") {
	// require(ABSPATH.'includes/file_DB/');
}