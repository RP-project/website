<?php
session_start();
header("Content-type:image/png");
$i=7;
$mot="";
while($i) {
	$lettre=mt_rand(0,9);
	$mot=$mot.$lettre;
	$i--;
}
$_SESSION["captcha_word"]=$mot;
function image($mot)
{
	$img = imagecreate(180,50);
	$font = 'LCD.TTF';
	
	$size=mt_rand(25,30);
    $box = imagettfbbox($size, 0, $font, $mot);
    $largeur = $box[2] - $box[0];
    $hauteur = $box[1] - $box[7];
	$marge=10;
	$largeur_lettre = round($largeur/strlen($mot));
	
	$background=imagecolorallocate($img,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));
	$color[0]=imagecolorallocate($img,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
	$color[1]=imagecolorallocate($img,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
	$color[2]=imagecolorallocate($img,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
	$color[3]=imagecolorallocate($img,mt_rand(100,255),mt_rand(100,255),mt_rand(100,255));
	
	for($i = 0; $i < strlen($mot);++$i)
	{
		$l = $mot[$i];
		$angle = mt_rand(-20,20);
		imagettftext($img,$size,$angle,($i*$largeur_lettre)+$marge, $hauteur+mt_rand(0,$marge/2),$color[0], $font, $l);	
	}
	imageline($img, 0,mt_rand(2,$hauteur), 180, mt_rand(2,50), $color[1]);
	imageline($img, 0,mt_rand(2,$hauteur), 180, mt_rand(2,50), $color[2]);
	imageline($img, 0,mt_rand(2,$hauteur), 180, mt_rand(2,50), $color[3]);
	imagepng($img);
	imagedestroy($img);
}

image($mot);
