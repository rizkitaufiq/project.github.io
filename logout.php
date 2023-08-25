<?php
	include("system/koneksi.php");
	session_start();
	session_destroy();
	header("location:index.php");

	$con -> close();
?>