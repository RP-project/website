<?php
function cryptPassword($password) {
	return sha1($password);
}

function insertUser($login,$password) {
	global $SQL_DB;
	$password=cryptPassword($password);
	$login=$SQL_DB->prepStr($login);
	$req=$SQL_DB->exec("INSERT INTO ".SQL_TBL_PREFIX."users (login,nickname,password,grade) VALUES ('".$login."','".$login."','".$password."',1)");
}

function getAccountByLogin($login) {
	global $SQL_DB;
	$login=$SQL_DB->prepStr($login);
	$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."users WHERE login='".$login."'");
	if($user=$SQL_DB->fetch($req)) {
		$SQL_DB->freeReq($req);
		$user["login"]=htmlentities($user["login"]);
	}
	return $user;
}