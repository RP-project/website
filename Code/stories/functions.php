<?php

function getStoryById($id) {
	global $SQL_DB;
	$id=$SQL_DB->prepstr($id);
	$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."stories WHERE id=".$id);
	return $SQL_DB->fetch($req);
}

function getStoriesByCategory($id) {
	global $SQL_DB;
	$id=$SQL_DB->prepstr($id);
	$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."stories WHERE category=".$id);
	return $SQL_DB->fetchAll($req);
}

function getLastStories($n=5,$category=0,$published=1) {
	global $SQL_DB;
	$n=$SQL_DB->prepstr($n);
	$published=$SQL_DB->prepstr($published);
	if($category) {
		$category=$SQL_DB->prepstr($category);
		$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."stories WHERE category=".$category." AND published=".$published." ORDER BY id DESC LIMIT ".$n);
	} else {
		$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."stories WHERE published=".$published." ORDER BY id DESC LIMIT ".$n);
	}
	return $SQL_DB->fetchAll($req);
}

function getStoriesCategoryById($id) {
	global $SQL_DB;
	$id=$SQL_DB->prepstr($id);
	$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."stories_categories WHERE id=".$id);
	return $SQL_DB->fetch($req);
}

function getChaptersByStory($id) {
	global $SQL_DB;
	$id=$SQL_DB->prepstr($id);
	$req=$SQL_DB->req("SELECT * FROM ".SQL_TBL_PREFIX."stories_chapters WHERE story=".$id);
	return $SQL_DB->fetchAll($req);
}