<?php
	include "../system/koneksi.php";
	
		$judul		= $_POST['judul'];
		$penulis	= $_POST['penulis'];
		$nim		= $_POST['nim'];
		$jurusan	= $_POST['jurusan'];
		$dosbimTA	= $_POST['dosbimTA'];
		$dosbimTA1	= $_POST['dosbimTA1'];	
		$accno		= $_POST['accno'];
		$barcode	= $_POST['barcode'];
		$subjek		= $_POST['subjek'];
		
		$lokasi_file= $_FILES['laporan']['tmp_name'];
		$nama_file	= $_FILES['laporan']['name'];
		$folder		= "../image/koleksi/$nama_file";
		
		move_uploaded_file($lokasi_file, $folder);

		if($lokasi_file !=""){

		$tambah = mysqli_query($con,"INSERT INTO tmp_koleksita(judul,penulis,nim,jurusan,dosbimTA,dosbimTA1,accno,barcode,subjek,laporan)VALUES('$judul','$penulis','$nim','$jurusan','$dosbimTA','$dosbimTA1','$accno','$barcode','$subjek','$nama_file')");
		if($tambah){
		echo "<script>alert('Berhasil Ditambahkan !');</script>";
		echo "<script>window.location='TApus.php';</script>"; 
 
		}
        else{
       echo "<script>alert('Gagal Ditambahkan !');</script>";
		echo "<script>window.location='TApus.php';</script>";
        }         
    }
	    
?>