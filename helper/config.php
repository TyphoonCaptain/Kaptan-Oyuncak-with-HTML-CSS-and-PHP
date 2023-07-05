<?php
ob_start();
session_start();
error_reporting(0);
ini_set("MEMORY_LIMIT","128M");
date_default_timezone_set('Europe/Istanbul');
define("URL","http://localhost/loginpage");
define("CONTENT",URL."/app/dn_content");

require_once 'ez_sql_core.php';
require_once 'ez_sql_mysqli.php';
require_once 'class.phpmailer.php';
require_once 'class.smtp.php';

define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","test");


$db = new ezSQL_mysqli(USER,PASS,DB,HOST);

$db->query("SET NAMES 'utf8'");
$db->query("SET CHARACTER SET utf8");
$db->query("SET COLLATION_CONNECTION = 'utf8mb3_turkish_ci' ");

function filter($string) {
	global $db;
	$string = trim($string);
	$string = $db->escape($string);
	$string = htmlentities($string);
	$string = strip_tags($string,'<p><a><ul><li><strong><em><ol>');
	return $string;
}

function filter2($string) {
	$string = trim($string);
	$string = addslashes($string);
	$string = htmlentities($string);
	$string = strip_tags($string,'<p><a><ul><li><strong><em><ol>');
	return $string;
}

function settings($ne) {
	global $db;
	return $db->get_var("select ".$ne." from ayarlar");
}

function kisaltici($icerik,$karakter) {
	$icerik = stripslashes(strip_tags($icerik));
	$icerik = mb_substr($icerik,0,$karakter,'UTF-8');

	return $icerik."...";
}

function sayfa_kisaltici($icerik_id,$karakter) {
	global $db;
	$icerik = $db->get_var("select icerik from sayfalar where id = '$icerik_id'");
	$icerik = stripslashes(strip_tags($icerik));
	$icerik = mb_substr($icerik,0,$karakter,'UTF-8');

	return $icerik."...";
}

function strip($string) {
	return stripslashes(html_entity_decode($string));
}

function permalink($string) {
	$find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
	$replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
	$string = strtolower(str_replace($find, $replace, $string));
	$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
	$string = trim(preg_replace('/\s+/', ' ', $string));
	$string = str_replace(' ', '-', $string);
	return $string;
}

function stamp($tarih) {
	$time_difference = time() - $tarih;		 
	$seconds = $time_difference ;
	$minutes = round($time_difference / 60 );
	$hours = round($time_difference / 3600 );
	$days = round($time_difference / 86400 );
	$weeks = round($time_difference / 604800 );
	$months = round($time_difference / 2419200 );
	$years = round($time_difference / 29030400 );
	if ($tarih == "0") {
	return "Data yok";
	}
	if($seconds <= 60) {
	return "$seconds saniye önce";
	}
	else if($minutes <=60) {	 
	if($minutes==1) {
	return "1 dakika önce";
	}
	else {
	return "$minutes dakika önce";
	}	 
	}
	else if($hours <=24) {
	if($hours==1) {
	return "1 saat önce";
	}
	else {
	return "$hours saat önce";
	}	 
	}
	else if($days <= 7) {	 
	if($days==1) {
	return "1 gün önce";
	}
	else {
	return "$days gün önce";
	}	 
	}
	else if($weeks <= 4) {	 
	if($weeks==1) {
	return "1 hafta önce";
	}
	else {
	return "$weeks hafta önce";
	}	 
	}
	else if($months <=12) {	 
	if($months==1) {
	return "1 ay önce";
	}
	else {
	return "$months ay önce";
	}	 
	}
	else {	 
	if($years==1)
	{
	return "1 yıl önce";
	}
	else {
	return "$years yıl önce";
	}
	}  
}