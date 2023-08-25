<?php
include "system/koneksi.php";


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
    <img src="image/logounsoed.png" width="25%" height="25%" style="margin-left: 38%;margin-top: 3%">
    <h2 style="text-align: center; color: #fff; margin-top: 5%">SELAMAT DATANG DI</h2>
  <h2 class="form-heading" style="margin-top: 10px;color:#fff;">Sistem Informasi Arsip Perpustakaan</h2>
    <h2 style="text-align: center; color: #fff; margin-top: 5%">NON ANGGOTA</h2>
  <div class="app-cam">
    <div class="row">
            <div class="col-md-6">
                <button class="btn btn-danger" style="margin-left:1.5%" data-toggle="modal" data-target="#daftar" >DAFTAR</button>
            </div>
            <div class="col-md-6">
                <div class="search pull-right">
                 <a href="index.php"><button class="btn btn-primary" style="margin-left:10%">LOGIN</button></a> 
                <br><br>      
                </div>
            </div>
        </div>
			<div class="clearfix"></div>
  </div>

  <div class="modal fade" id="daftar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h1 style="text-align: center;">Isi Arsip KP</h1>
                </div>
            <div class="modal-body">
                <form method="post" id="insert_form" action="daftarNA.php">
                    <input placeholder="Nama" type="text" name="username" class="form-control1" required="">
                    <br><br>
                    <input placeholder="NIM/No Identitas" type="text" name="password" class="form-control1" required="">
                    <br><br>
                    <input placeholder="Prodi/Jurusan" name="nama_user" type="text" name="nim" class="form-control1" required="">
                    <br><br>
                    <select class="btn-primary btn" name="level">
                        <option value="non anggota">Non Anggota</option>
                    </select> 
                    <br><br>
                    <div class="modal-footer">
                        <input  type="submit" class="btn-danger btn" data-dismiss="modal" value="Batal">
                        <input  type="submit" name="daftar" id="insert" value="Daftar" class="btn-primary btn"/>
                    </div>
                </form>
            </div>
            <div class="modal-footer">       
            </div>
            </div>
        </div>
    </div>

   
</body>
</html>
