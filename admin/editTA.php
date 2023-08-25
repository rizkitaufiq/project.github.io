<?php
	include('../system/koneksi.php');

		$judul		= $_POST['judul'];
		$penulis	= $_POST['penulis'];
		$nim		= $_POST['nim'];
		$jurusan	= $_POST['jurusan'];
		$dosbimTA	= $_POST['dosbimTA'];	
		$dosbimTA1	= $_POST['dosbimTA1'];	
		$subjek		= $_POST['subjek'];
		$barcode	= $_POST['barcode'];
		$accno		= $_POST['accno'];

		
 		$id = $_POST['id'];

 

		$edit = mysqli_query($con,"UPDATE koleksita set judul='$judul', penulis='$penulis', nim='$nim', jurusan='$jurusan', dosbimTA='$dosbimTA', dosbimTA='$dosbimTA1', subjek='$subjek', barcode='$barcode', accno='$accno'  WHERE id_koleksiTA='$id'");
		if($edit){
		echo "<script>alert('Data Berhasil Diperbaharui !');</script>";
		echo "<script>window.location='koleksiTA.php';</script>"; 
		}
        else{
        echo "<script>alert('Data Gagal Diperbaharui !');</script>";
		echo "<script>window.location='koleksiTA.php';</script>";
        }
	
?>
