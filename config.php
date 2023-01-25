<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == "development") {
	define("BASE_URL", "http://localhost/galeria");
	$config['dbname'] = 'blog';
	$config['host']   = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123456';
} else {
	define("BASE_URL", "http://meusite.com.br/");
	$config['dbname'] = '';
	$config['host']   = '';
	$config['dbuser'] = '';
	$config['dbpass'] = '';
}
