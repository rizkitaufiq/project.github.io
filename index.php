<?php
include "system/koneksi.php";
session_start();
if(isset($_SESSION['nama_user'])){
    if($_SESSION['level'] == "anggota"){
        header("location:home.php");
    }else{
        if(isset($_SESSION['nama_user'])){
            if ($_SESSION['level'] == "non anggota") {
                header("location:home.php");
            }
        }
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sistem Informasi Arsip Perpustakaan</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/administrator.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="wid-social linkedin" style="width: 50%;
    margin-top: 2%;margin-left: 25%">
    <img src="image/logounsoed.png" width="25%" height="25%" style="margin-left: 38%;margin-top: 5%">
    <h2 style="text-align: center; color: #fff; margin-top: 5%">SELAMAT DATANG DI</h2>
  <h2 class="form-heading" style="margin-top: 10px;color: #fff;">Sistem Informasi Arsip Perpustakaan</h2>
  <div class="app-cam">
	  <form action="cekanggota.php" method="POST">
		<input type="text" class="text" style="width: 250%;margin-left: -77%" placeholder="Nama" required="" name="username">
		<input type="text" class="text" style="width: 250%;margin-left: -77%" placeholder="Nim" required="" name="password">
		<div class="submit" style="width: 250%;margin-left: -77%"><input type="submit" value="Login" name="login"></div> 
    <br>
    <a href="daftar_non_anggota.php" style="color: #fff;margin-left: -77%;font-family:sans-serif;"><u>non anggota</u></a>
    <br><br>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
   
</body>
</html>
