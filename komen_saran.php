<?php
include"system/koneksi.php";
session_start();
if($_SESSION['level'] =="anggota" OR $_SESSION['level'] =="non anggota" || $_SESSION['status'] !="login"){
    
    	$id_user		 = $_SESSION['id'];
    	$saran			 = $_POST['saran'];
    	date_default_timezone_set('Asia/Jakarta');
    	$dt              = new DateTime();
    	$dt2             = $dt->format('Y-m-d H:i:s');
    	$tambah          = mysqli_query($con,"INSERT INTO saran(id_user, saran, waktu) VALUES ('$id_user','$saran','$dt2' )");
        echo "<script>alert('Berhasil Dikirim !');</script>";
        echo "<script>window.location='Arsip_Ebook.php';</script>"; 
    }else{
     
    	header('location:Arsip_Ebook.php');  	                  
    }
?>