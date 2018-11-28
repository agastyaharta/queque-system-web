<?php
	$host = "45.76.163.245";
	$user = "usr_db_rs";
	$pass = "TP9cH65QXo";
	$db_name = "rumah_sakit";
	$db = mysqli_connect($host, $user, $pass, $db_name);
	
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	
	if ($db->connect_error) {
		die("Connection Failed" . $db->connect_error);
	}
?>