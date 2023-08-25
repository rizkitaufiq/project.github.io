<?php
	include "system/koneksi.php";
	
		$username	= $_POST['username'];
		$password	= $_POST['password'];
		$nama_user	= $_POST['nama_user'];
		$level		= $_POST['level'];
		
		$tambah = mysqli_query($con,"INSERT INTO user(username,password,nama_user,level) VALUES('$username','$password','$nama_user','$level')");
		if($tambah){
		echo "<script>alert('Berhasil Daftar !');</script>";
		echo "<script>window.location='daftar_non_anggota.php';</script>"; 
 
		}
        else{
        echo "<script>alert('Gagal Daftar !');</script>";
		echo "<script>window.location='daftar_non_anggota.php';</script>";
        }
	
?>