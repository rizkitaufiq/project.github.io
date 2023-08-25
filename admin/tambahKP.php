<?php
	include "../system/koneksi.php";
	
		$judul		= $_POST['judul'];
		$penulis	= $_POST['penulis'];
		$nim		= $_POST['nim'];
		$jurusan	= $_POST['jurusan'];
		$dosbimKP	= $_POST['dosbimKP'];
		$dosbimKP1	= $_POST['dosbimKP1'];	
		$accno		= $_POST['accno'];
		$barcode	= $_POST['barcode'];
		$subjek		= $_POST['subjek'];

		$lokasi_file= $_FILES['laporan']['tmp_name'];
		$nama_file	= $_FILES['laporan']['name'];
		$folder		= "../image/koleksi/$nama_file";
		
		move_uploaded_file($lokasi_file, $folder);

		if($lokasi_file !=""){


		$tambah = mysqli_query($con,"INSERT INTO koleksikp(judul,penulis,nim,jurusan,dosbimKP,dosbimKP1,accno,subjek,barcode,laporan)VALUES('$judul','$penulis','$nim','$jurusan','$dosbimKP','$dosbimKP1','$accno','$subjek','$barcode','$nama_file')");
		if($tambah){
		echo "<script>alert('Berhasil Ditambahkan !');</script>";
		echo "<script>window.location='koleksiKP.php';</script>";
		}
        else{
        echo "<script>alert('Gagal Ditambahkan !');</script>";
		echo "<script>window.location='koleksiKP.php';</script>";
        }        
    }

	
?>