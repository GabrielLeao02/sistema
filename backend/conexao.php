<?php
date_default_timezone_set("America/Sao_Paulo");

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'sistema';

try {
	$conn = mysqli_connect($hostname, $username, $password, $database);
} catch (Exception $e) {
	echo 'Error connecting to dataBase' . $e;
}


