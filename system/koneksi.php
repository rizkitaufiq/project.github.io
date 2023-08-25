<?php
	$server		= 'localhost';
	$username	= 'root';
	$password	= '';
	$db         = 'siap';

	$con	= mysqli_connect($server, $username, $password,$db);
	if(!$con)
		die('Gagal terhubung ke database!');

	$database = mysqli_select_db($con,"siap");
	if(!$database)
		die('Database tidak ditemukan');
?>