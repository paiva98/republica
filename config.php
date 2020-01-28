<?php
require 'environment.php';

global $config;
global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	// CONFIGURACAO ORIGINAL
	// define("BASE_URL", "http://localhost/republica/");
	// $config['dbname'] = 'republicaon';
	// $config['host'] = 'localhost';
	// $config['dbuser'] = 'root';
	// $config['dbpass'] = '';

	//PARA FUNCIONAR COM O BANCO DO NILSON
	define("BASE_URL", "http://192.168.0.106/republica/");
	$config['dbname'] = 'republicaon';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'paiva';
	$config['dbpass'] = '21211345';
} else {
	define("BASE_URL", "https://republicason.com.br/");
	$config['dbname'] = 'republ85_republicaon';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'republ85_admin';
	$config['dbpass'] = 'vemcaver_23_info';
}




$db = new PDO("mysql:dbname=".$config['dbname'].";charset=utf8;host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>