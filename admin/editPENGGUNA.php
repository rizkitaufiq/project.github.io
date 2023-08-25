<?php
	include('../system/koneksi.php');

		$username		= $_POST['username'];
		$password		= $_POST['password'];
		$nama_user		= $_POST['nama_user'];
		$level			= $_POST['level'];
		
 		$id = $_POST['id'];
 
		$edit = mysqli_query($con,"UPDATE user set username='$username', password='$password', nama_user='$nama_user', level='$level' WHERE id='$id'");
		if($edit){
		echo "<script>alert('Data Berhasil Diperbaharui !');</script>";
		echo "<script>window.location='pengguna.php';</script>"; 
		}
        else{
        echo "<script>alert('Data Gagal Diperbaharui !');</script>";
		echo "<script>window.location='pengguna.php';</script>";
        }
	
?>
